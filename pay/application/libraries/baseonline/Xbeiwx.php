<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . 'libraries/baseonline/Online.php';

abstract class Xbeiwx extends Online {
        /*
         * 在线api请求地址
         */
	public $version = 'V1.0';    
        /*
         * 在线api请求地址
         */
	public $platformBaseUrl = 'http://gateway.xbeionline.com/Gateway/Xbeipay';
        /*
         * 商户key
         * 在线商那儿
         * 不过是第一方传过来的
         */
	public $secret = '';
	public $platformParam = [
            'Version' => '', 
            'MerchantCode' => '', 
            'OrderId' => '', 
            'Amount' => '', 
            'AsyNotifyUrl' => '', 
            'SynNotifyUrl' => '', 
            'OrderDate' => '', 
            'TradeIp' => '', 
            'PayCode' => '',
            'SignValue' => ''
        ];

	public $platformParamOptional = [
            'CardNo' => '',
            'CardPassword' => '',
            'QQ' => '',
            'Telephone' => '',
            'GoodsName' => '',
            'GoodsDescription' => '',
            'Remark1' => '',
            'Remark2 ' => ''
        ];

	//key = second-party ;  val = third-party
	public $bankCode = [
            'ICBC' => 100012, 
            'ABC' => 100013, 
            'CCB' => 100014, 
            'CMB' => 100016, 
            'COMM' => 100015, 
            'BOC' => 100017, 
            'CIB' => 100020, 
            'CMBC' => 100018, 
            'PSBC' => 100025, 
            'CITIC' => 100023, 
            'CEB' => 100024,
            'WX' => 100040
        ];
        private $fee_rate = 0.990;

	public function getFeeRate() {
		return $this->fee_rate;
	}

	public function __construct($config = array()) {
		parent::__construct($config);
                
                date_default_timezone_set('Asia/Shanghai');
                
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
            /* MerchantCode */
            $config['Version'] = $this->version;            
            /* MerchantCode */
            $config['MerchantCode'] = $checkedData['fmerchantid'];
            /* OrderId */
            $config['OrderId'] = $checkedData['forderno'];
            /* Amount */
            $config['Amount'] = strval(number_format($checkedData['famount'], 2, '.', ''));
            /* AsyNotifyUrl */
            $config['AsyNotifyUrl'] = $checkedData['fnotifyurl'];
            /* SynNotifyUrl */
            $config['SynNotifyUrl'] = $checkedData['fnotifyurl'].'_SynNotify';
            /* OrderDate */
            $config['OrderDate'] = date('YmdHis', time());
            /* TradeIp */
            $config['TradeIp'] = $this->CI->input->ip_address();
            /* TokenKey */
            $this->secret = $checkedData['fmerchantkey'];
            /* MerchantCode */
            $config['PayCode'] = isset($this->bankCode[strtoupper($checkedData['fbankcode'])]) 
                    ? $this->bankCode[strtoupper($checkedData['fbankcode'])] : '' ;
            /*签名文本*/
            $signText = 'Version=['.$this->version.']'
                    . 'MerchantCode=['.$config['MerchantCode'].']'
                    . 'OrderId=['.$config['OrderId'].']'
                    . 'Amount=['.$config['Amount'].']'
                    . 'AsyNotifyUrl=['.$config['AsyNotifyUrl'].']'
                    . 'SynNotifyUrl=['.$config['SynNotifyUrl'].']'
                    . 'OrderDate=['.$config['OrderDate'].']'
                    . 'TradeIp=['.$config['TradeIp'].']'
                    . 'PayCode=['.$config['PayCode'].']'
                    . 'TokenKey=['.$this->secret.']';
            /*签名*/
            $config['SignValue'] = strtoupper(md5($signText));

            $this->loadPlatformParams($config);
            $this->loadLineParams($config);
	}

	public function callBackCheck($data) {
            /*签名文本*/
            if($data['notifytype'] == 'AsyNotify') {//异步通知签名
                $signText = 'Version=['.$data['Version'].']'
                        . 'MerchantCode=['.$data['MerchantCode'].']'
                        . 'OrderId=['.$config['OrderId'].']'
                        . 'OrderDate=['.$config['OrderDate'].']'
                        . 'TradeIp=['.$config['TradeIp'].']'
                        . 'SerialNo=['.$config['TradeIp'].']'
                        . 'Amount=['.$config['Amount'].']'
                        . 'PayCode=['.$config['PayCode'].']'
                        . 'State=['.$config['State'].']'
                        . 'FinishTime=['.$config['FinishTime'].']'
                        . 'TokenKey=['.$data['secret'].']';
            } else {//同步通知签名
                $signText = 'Version=['.$data['Version'].']'
                        . 'MerchantCode=['.$data['MerchantCode'].']'
                        . 'OrderId=['.$config['OrderId'].']'
                        . 'OrderDate=['.$config['OrderDate'].']'
                        . 'TradeIp=['.$config['TradeIp'].']'
                        . 'PayCode=['.$config['PayCode'].']'
                        . 'State=['.$config['State'].']'
                        . 'TokenKey=['.$data['secret'].']';                
            }
            $sign = strtoupper(md5($signText));

            if (strcasecmp($sign, $data['SignValue']) == 0) {
                    return true;
            } else {
                    log_message('error', 'auth:notifytype='.$data['notifytype'].';sign='.$sign);
                    return false;
            }

	}

	public function get_all_params() {
		return array_merge($this->platformParam, $this->platformParamOptional, $this->lineParam);
	}

	public function send() {
		$params = $this->get_all_params();

		$sHtml = "<!DOCTYPE html><html><head><title>提交中.....</title></head><body><form id='xbeisubmit' name='xbeisubmit' action='" . $this->platformBaseUrl . "' method='post'>";
		foreach ($params as $key => $value) {
			$sHtml .= "<input type='hidden' name='" . $key . "' value='" . $value . "'/>";
		}
		$sHtml = $sHtml . "<input type='submit' value='正在提交中......'></form>";

		$sHtml = $sHtml . "<script>document.forms['xbeisubmit'].submit();</script></body></html>";
		echo $sHtml;
	}

}