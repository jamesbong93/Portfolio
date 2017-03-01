<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'libraries/baseonline/Online.php';

abstract class Fpwx extends Online {
	public $platformBaseUrl = 'http://trade.777pay.cn:8080/cgi-bin/netpayment/pay_gate.cgi';

	public $secret = '';

	public $platformParam = ['apiName' => 'WEB_PAY_B2C', 'apiVersion' => '1.0.0.0', 'platformID' => 'MerchTest', 'merchNo' => '210001110100250', 'orderNo' => '', 'amt' => '', 'tradeDate' => '', 'merchUrl' => 'http://ralf.com:8040/pay/fpwxback', 'ClientIP' => '', 'choosePayType' => '5'];

	public $platformParamOptional = ['merchParam' => '', 'tradeSummary' => 'charge', 'signMsg' => '', 'bankCode' => ''];

	//key = second-party ;  val = third-party
	public $bankCode = ['ICBC' => 'ICBC', 'ABC' => 'ABC', 'CCB' => 'CCB', 'CMB' => 'CMB', 'COMM' => 'COMM', 'BOC' => 'BOC', 'CIB' => 'CIB', 'CMBC' => 'CMBC', 'PSBC' => 'PSBC', 'CITIC' => 'CNCB', 'CEB' => 'CEB'];

	private $fee_rate = 0.988;

	public function getFeeRate() {
		return $this->fee_rate;
	}

	public function __construct($config = array()) {
		parent::__construct($config);

		empty($config) OR $this->loadLineParams($config);

		log_message('info', 'Class' . get_class($this) . 'Initialized');
	}

	public function loadPlatformParams($config = array()) {

		foreach ($config as $key => $val) {
			if (isset($this->platformParam[$key])) {
				$this->platformParam[$key] = $val;
			}

			if (isset($this->platformParamOptional[$key])) {
				$this->platformParamOptional[$key] = $val;
			}
		}

		$this->dealWithBankCode();

	}

	//手动注册参数,  construct 方法为自动注册
	public function init($checkedData) {
		$config['platformID'] = $checkedData['fmerchantid'];
		$config['merchNo'] = $checkedData['fmerchantid'];
		$this->secret = $checkedData['fmerchantkey'];

		$config['merchParam'] = $checkedData['fuserid'];
		$config['orderNo'] = $checkedData['forderno'];

		$config['amt'] = strval(number_format($checkedData['famount'], 2, '.', ''));

		//Transaction time in the format of YYYY-MM-DD hh:mm:sstt
		$currentTime = time();
		$TransactionDate = date('Ymd', $currentTime);
		$TransactionTime = date('YmdHis', $currentTime);
		$config['tradeDate'] = $TransactionDate;

		$config['merchUrl'] = $checkedData['fnotifyurl'];

		$config['bankCode'] = $checkedData['fbankcode'];

		$signTmp = sprintf("apiName=%s&apiVersion=%s&platformID=%s&merchNo=%s&orderNo=%s&tradeDate=%s&amt=%s&merchUrl=%s&merchParam=%s&tradeSummary=%s",
			$this->platformParam['apiName'], $this->platformParam['apiVersion'], $config['platformID'], $config['merchNo'], $config['orderNo'], $config['tradeDate'], $config['amt'], $config['merchUrl'], $config['merchParam'], $this->platformParamOptional['tradeSummary']);

		$config['signMsg'] = MD5($signTmp . $this->secret);

		$this->loadPlatformParams($config);
		$this->loadLineParams($config);
	}

	public function callBackCheck($data) {
		$signTmp = sprintf("apiName=%s&notifyTime=%s&tradeAmt=%s&merchNo=%s&merchParam=%s&orderNo=%s&tradeDate=%s&accNo=%s&accDate=%s&orderStatus=%s",
			$data['apiName'], $data['notifyTime'], $data['tradeAmt'], $data['merchNo'], $data['merchParam'], $data['orderNo'], $data['tradeDate'], $data['accNo'], $data['accDate'], $data['orderStatus']);
		$sign = MD5($signTmp . $data['secret']);
		
		if (strcasecmp($sign, $data['signMsg']) == 0) {
			return true;
		} else {
			return false;
		}

	}

	private function dealWithBankCode() {
		if ($this->platformParamOptional['bankCode']) {
			if (isset($this->bankCode[$this->platformParamOptional['bankCode']])) {
				$this->platformParamOptional['bankCode'] = $this->bankCode[$this->platformParamOptional['bankCode']];
			} else {
				$this->platformParamOptional['bankCode'] = '';
			}
		}
	}

	public function get_all_params() {
		return array_merge($this->platformParam, $this->platformParamOptional, $this->lineParam);
	}

	public function send() {
		$params = $this->get_all_params();

		$sHtml = "<!DOCTYPE html><html><head><title>提交中.....</title></head><body><form id='rongpaysubmit' name='rongpaysubmit' action='" . $this->platformBaseUrl . "' method='post'>";
		foreach ($params as $key => $value) {
			$sHtml .= "<input type='hidden' name='" . $key . "' value='" . $value . "'/>";
		}
		$sHtml = $sHtml . "<input type='submit' value='正在提交中......'></form>";

		$sHtml = $sHtml . "<script>document.forms['rongpaysubmit'].submit();</script></body></html>";
		echo $sHtml;
	}

}