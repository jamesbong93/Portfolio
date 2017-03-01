<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'libraries/baseonline/Online.php';
require_once APPPATH . 'third_party/jubaopay/jubaopay.php';

log_message('info', 'APPPATH: ' .APPPATH);
abstract class Jubao extends Online {
	
	// public $platformBaseUrl = 'http://www.jubaopay.com/apitest.htm'; // testing api
	public $platformBaseUrl = 'http://www.jubaopay.com/apipay.htm';

	public $secret = '';

	// actual payMethod is alipay, but categorized as WANGYIN
	public $platformParam = ['message' => '', 'signature' => '', 'payMethod' => 'WANGYIN'];

	public $platformParamOptional = [];

	//key = second-party ;  val = third-party
	public $bankCode = [];

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
	}

	//手动注册参数,  construct 方法为自动注册
	public function init($checkedData) {

		$this->secret = $checkedData['fmerchantkey'];
		$amount = strval(number_format($checkedData['famount'], 2, '.', ''));

		//商户利用支付订单（payid）和商户号（mobile）进行对账查询
		$jubaopay=new jubaopay(APPPATH .'third_party/jubaopay/jubaopay.ini');

		$jubaopay->setEncrypt("payid", $checkedData['forderno']);
		$jubaopay->setEncrypt("partnerid", $checkedData['fmerchantid']);
		$jubaopay->setEncrypt("amount", $amount);
		$jubaopay->setEncrypt("goodsName", '');
		$jubaopay->setEncrypt("payerName", $checkedData['fuserid']);
		$jubaopay->setEncrypt("remark", '');
		$jubaopay->setEncrypt("returnURL", 'http://bshiqishijie.com/jubaoc/back');
		$jubaopay->setEncrypt("callBackURL", $checkedData['fnotifyurl']);


		//对交易进行加密=$message并签名=$signature
		$jubaopay->interpret();
		$config['message'] = $jubaopay->message;
		$config['signature'] = $jubaopay->signature;
		
		$this->loadPlatformParams($config);	// message and signature only
		$this->loadLineParams($config);
	}

	public function get_all_params() {
		return array_merge($this->platformParam, $this->platformParamOptional, $this->lineParam);
	}

	// get the data and send to third party PG
	public function send() {
		$params = $this->get_all_params();
		
		$sHtml = "<!DOCTYPE html><html><head><title>提交中.....</title></head><body><form id='rongpaysubmit' name='rongpaysubmit' action='" . $this->platformBaseUrl . "' method='post'>";
		foreach ($params as $key => $value) {
			$sHtml .= "<input type='hidden' name='" . $key . "' value='" . $value . "'/>";
			log_message('info', 'key: ' .$key. ", value:" .$value);
		}
		$sHtml = $sHtml . "<input type='submit' value='正在提交中......'></form>";

		$sHtml = $sHtml . "<script>document.forms['rongpaysubmit'].submit();</script></body></html>";
		echo $sHtml;
	}

}