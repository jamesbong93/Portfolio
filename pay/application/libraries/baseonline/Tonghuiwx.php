<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'libraries/baseonline/Online.php';

abstract class Tonghuiwx extends Online {
	//public $platformBaseUrl = 'https://182.148.123.7/cgi-bin/netpayment/pay_gate.cgi';
	public $platformBaseUrl = 'https://pay.41.cn/gateway';

	public $secret = '';

	public $platformParam = ['input_charset' => 'UTF-8', 'notify_url' => 'http://ralf.com:8040/pay/tonghuiwxback', 'return_url' => '', 'pay_type'=> '1', 'merchant_code' => '12033119', 'order_no' => '', 'order_amount' => '', 'order_time' => '', 'req_referer' => 'http://ralf.com:8040/', 'customer_ip' => ''];

	public $platformParamOptional = ['return_params' => '', 'product_name' => 'charge', 'sign' => '', 'bank_code' => ''];

	//key = second-party ;  val = third-party
	public $bankCode = ['ICBC' => 'ICBC', 'ABC' => 'ABC', 'CCB' => 'CCB', 'CMB' => 'CMBC', 'COMM' => 'BOCOM', 'BOC' => 'BOC', 'CIB' => 'CIB', 'CMBC' => 'CMBCS', 'PSBC' => 'PSBC', 'CITIC' => 'ECITIC', 'CEB' => 'CEBBANK', 'wx' => 'WEIXIN', 'WXZF' => 'WEIXIN'];

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
		//$config['platformID'] = $checkedData['fmerchantid'];
		$config['merchant_code'] = $checkedData['fmerchantid'];
		$this->secret = $checkedData['fmerchantkey'];

		$config['return_params'] = $checkedData['fuserid'];

		$config['order_no'] = $checkedData['forderno'];

		$config['order_amount'] = strval(number_format($checkedData['famount'], 2, '.', ''));

		//Transaction time in the format of YYYY-MM-DD hh:mm:sstt
		$currentTime = time();
		$TransactionDate = date('Ymd', $currentTime);
		$TransactionTime = date('Y-m-d H:i:s', $currentTime);
		$config['order_time'] = $TransactionTime;

		$config['notify_url'] = $checkedData['fnotifyurl'];

		$config['bank_code'] = $checkedData['fbankcode'];

		$config['req_referer'] = $_SERVER['HTTP_HOST'];

		$config['customer_ip'] = get_real_ip();





		//$signTmp = sprintf("apiName=%s&apiVersion=%s&platformID=%s&merchNo=%s&order_no=%s&order_time=%s&order_amount=%s&notify_url=%s&return_params=%s&product_name=%s",
		//	$this->platformParam['apiName'], $this->platformParam['apiVersion'], $config['platformID'], $config['merchNo'], $config['order_no'], $config['order_time'], $config['order_amount'], $config['notify_url'], $config['return_params'], $this->platformParamOptional['product_name']);

		//$config['sign'] = MD5($signTmp . $this->secret);

		$this->loadPlatformParams($config);
		$this->loadLineParams($config);

		$params = $this->get_all_params();
		$params = array_filter($params,array($this, 'delEmpty'));
		ksort($params);

		$md5 = '';
		foreach ($params as $key => $value) {
			$md5 .= ($md5=='' ? $key.'='.$value : '&'.$key.'='.$value);
		}
		$md5 .= ('&key='.$this->secret);

		$this->platformParamOptional['sign'] = md5($md5);

		//var_dump($config,$params);

		//var_dump($params,$md5,$this->platformParamOptional['sign']);exit;

		//string(320) "bank_code=ICBC&customer_ip=127.0.0.1&input_charset=UTF-8&merchant_code=16827272¬ify_url=http://ralf.com:8040/tonghuiwxc/back&order_amount=7.00&order_no=TB0907CF0340741BAKKBXE&order_time=2016-09-07 13:37:32&pay_type=1&product_name=charge&req_referer=ralf.com:8040&return_params=599&key=76c48fec5ba411e6826544a842133fcb" string(32) "a11c2e3d94f428fbc42456278fbf535a"
	}

	function delEmpty($v) {
		if ($v === "" || $v === null) {
		    return false;
		}
		return true;
	}

	public function callBackCheck($data) {
		foreach ($data as $k => $v) {
			if ($k == 'sign') {
				$dataSign = $v;
				unset($data[$k]);
			}
			if ($k == 'secret') {
				$dataSecret = $v;
				unset($data[$k]);
			}
		}

		//log_message('error', 'datain='.print_r($data,true));

		$data = array_filter($data,array($this, 'delEmpty'));
		ksort($data);
		$md5 = '';
		foreach ($data as $key => $value) {
			$md5 .= ($md5=='' ? $key.'='.$value : '&'.$key.'='.$value);
		}
		$md5 .= ('&key='.$dataSecret);

		$freshSign = md5($md5);

		if (strcasecmp($freshSign, $dataSign) == 0) {
			return true;
		} else {
			return false;
		}

	}

	private function dealWithBankCode() {
		if ($this->platformParamOptional['bank_code']) {
			if (isset($this->bankCode[$this->platformParamOptional['bank_code']])) {
				$this->platformParamOptional['bank_code'] = $this->bankCode[$this->platformParamOptional['bank_code']];
			} else {
				$this->platformParamOptional['bank_code'] = '';
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
