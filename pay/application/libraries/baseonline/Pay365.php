<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'libraries/baseonline/Online.php');

abstract class Pay365 extends Online {
	public $platformBaseUrl = 'http://payment.codingreader.net/merchanttransfer';

	public $platformParam = [/*'MerchantCode'=>'', 'EncryptedSign'=>'',*/ 'Currency'=>'CNY', 'RefID'=>'',  'Amount'=>'', 'TransactionDate' => '2000-01-01 08:00:00PM', 'ReturnFrontURL' => 'http://ralf.com:8040/pay/backtouser', 'ReturnBackURL'=>'http://ralf.com:8040/pay/back', 'ClientIP'=>''];

	public $platformParamOptional = ['CustomerID'=>'', 'Remark'=>'', 'Language' => 'zh-cn', 'BankCode' => ''];

	//key = second-party ;  val = third-party
	public $bankCode = ['ICBC'=>'ICBC','ABC'=>'ABC','CCB'=>'CCB','CMB'=>'CMB','COMM'=>'BCOM','BOC'=>'BOC','CIB'=>'CIB','CMBC'=>'CMBC','PSBC'=>'PSBC','CITIC'=>'CITIC','CEB'=>'CEB'];


	public function __construct($config = array())
	{
		parent::__construct($config);

		empty($config) OR $this->loadLineParams($config);

		log_message('info', 'Class' . get_class($this) . 'Initialized');
	}


	public function loadPlatformParams($config = array()) {

		foreach ($config as $key => $val)
		{
			if (isset($this->platformParam[$key]))
			{
				$this->platformParam[$key] = $val;
			}

			if (isset($this->platformParamOptional[$key]))
			{
				$this->platformParamOptional[$key] = $val;
			}
		}

		$this->dealWithBankCode();
		
	}

	//手动注册参数,  construct 方法为自动注册
	public function init($checkedData) {
		$config['MerchantCode'] = $checkedData['fmerchantid'];

		$config['CustomerID'] = $checkedData['fuserid'];
		$config['RefID'] = $checkedData['forderno'];
		$config['Amount'] = strval(number_format($checkedData['famount'], 2, '.', ''));

		//Transaction time in the format of YYYY-MM-DD hh:mm:sstt
		$currentTime = time();
		$TransactionDate = date('Y-m-d h:i:sA',$currentTime);
		$TransactionTime = date('YmdHis',$currentTime);
		$config['TransactionDate'] = $TransactionDate;

		//The URL required for returned transaction status from Gateway to Merchant that will display to the customer.
		$config['ReturnFrontURL'] = $checkedData['fnotifyurl'].'touser';

		//The URL or HTTP handler required for receiving returned transaction status from Gateway to Merchant. No visible to customer.
		$config['ReturnBackURL'] = $checkedData['fnotifyurl'];

		$config['BankCode'] = $checkedData['fbankcode'];

		$config['EncryptedSign'] = md5($config['MerchantCode'].$config['RefID'].$config['CustomerID'].$config['Amount'].$this->platformParam['Currency'].$TransactionTime.$checkedData['fmerchantkey'].$this->platformParam['ClientIP']);

		
		$this->loadPlatformParams($config);
		$this->loadLineParams($config);
	}

	private function dealWithBankCode() {
		if ($this->platformParamOptional['BankCode']) {
			if (isset($this->bankCode[$this->platformParamOptional['BankCode']])) {
				$this->platformParamOptional['BankCode'] = $this->bankCode[$this->platformParamOptional['BankCode']];
			} else {
				$this->platformParamOptional['BankCode'] = '';
			}
		}
	}

	public function get_all_params() {
		return array_merge($this->platformParam,$this->platformParamOptional,$this->lineParam);
	}

	public function send() {
		$params = $this->get_all_params();

		$sHtml = "<!DOCTYPE html><html><head><title>提交中.....</title></head><body><form id='rongpaysubmit' name='rongpaysubmit' action='" . $this->platformBaseUrl . "' method='post'>";
        foreach ($params as $key => $value) {
            $sHtml.= "<input type='hidden' name='" . $key . "' value='" . $value . "'/>";
        }
        $sHtml = $sHtml . "<input type='submit' value='正在提交中......'></form>";

        $sHtml = $sHtml . "<script>document.forms['rongpaysubmit'].submit();</script></body></html>";
        echo $sHtml;
	}

}