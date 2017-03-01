<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Firstparty {
	public $mustArray = ['fdbip', 'fdbdatabase', 'fdbuser', 'fdbpass', 'fnotifyurl', 'fmerchantid', 'fmerchantkey'];
	public $checkArray = ['forderno' => 'md5forderno', 'fuserid' => 'md5fuserid', 'fusercode' => 'md5fusercode', 'fbankid' => 'md5fbankid', 'famount' => 'md5famount']; 
	public $errorArr = ['1' => '非法的无参请求!', '3' => '非法的错误参数请求!', '4' => '缺少必要参数!', '5' => '参数验证未通过!', '6' => '请求超时!' ];

	protected $CI;

	private $checkedData = array();

	
	/**
     * 处理原始输入，如果出错返回错误编号(正整数),未出错返回0
     * @param array
     * @return string
     */
	public function checkParams($gets) {
		if ($gets['datas'] == '' || $gets['surl'] == '') {
			return '1';
		}

		$this->CI =&get_instance();

		$md5datas = str_replace(" ", "+", $gets['datas']);
		$demd5datas = $this->payDecrypt($md5datas, $this->CI->config->item('API-1st-pwd'));
		//parse_str($demd5datas, $data_arr);
		$data_arr = $this->decodeToArr($demd5datas);

		if (count($data_arr) <= 0) {
			return '3';
		}

		foreach ($this->mustArray as $k => $v) {
            if (!isset($data_arr[$v])) {
                return '4';
            }
        }
        foreach ($this->checkArray as $key => $value) {
            if (!isset($data_arr[$key])) {
                return '4';
            }
            if (!isset($data_arr[$value])) {
                return '4';
            }
            if ($data_arr[$key] != $this->payDecrypt($data_arr[$value], $this->CI->config->item('API-2nd-pwd'))) {
                return '5';
            }
        }
        
        //检查请求是否过期
        if (time() - $this->payDecrypt($data_arr['subTime'], $this->CI->config->item('API-2nd-pwd')) > $this->CI->config->item('API-timeLimit')) {
            return '6';
        }

        //验证全部通过后，保存干净数据
        $this->setCheckedData($data_arr);
		return '0';
	}



	//set 和 get 处理过的干净数据
	public function setCheckedData($data_arr) {
		$this->checkedData = $data_arr;
	}
	public function getCheckedData($key = null) {
		if ($key) {
			return $this->checkedData[$key];
		}
		return $this->checkedData;
	}



	public function getErrorMsgByNo($errorNo) {
		return $this->errorArr[$errorNo];
	}


	/**
     * 处理请求参数为一个数组
     * @param string $demd5datas
     * @return array
     */
    private function decodeToArr($demd5datas) {
        $params = array();
        $firstParams = explode('&', $demd5datas);
        foreach ($firstParams as $key => $firstParam) {
            if (trim($firstParam) !== "") {
                $secondParams = explode('=', $firstParam, 2);
                $params[$secondParams[0]] = $secondParams[1];
            }
        }
        return $params;
    }

	/**
	 *
	 * @param string $enc_text
	 * @param string $password
	 * @param int $iv_len
	 * @return string
	 */
	private function payDecrypt($enc_text, $password, $iv_len = 16) {
		$enc_text = base64_decode($enc_text);
		$n = strlen($enc_text);
		$i = $iv_len;
		$plain_text = '';
		$iv = substr($password ^ substr($enc_text, 0, $iv_len), 0, 512);
		while ($i < $n) {
			$block = substr($enc_text, $i, 16);
			$plain_text .= $block ^ pack('H*', md5($iv));
			$iv = substr($block . $iv, 0, 512) ^ $password;
			$i += 16;
		}
		return preg_replace('/\\x13\\x00*$/', '', $plain_text);
	}
}