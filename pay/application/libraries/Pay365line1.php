<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'libraries/baseonline/Pay365.php');

class Pay365line1 extends Pay365 {

	public $lineParam = ['MerchantCode'=>'','EncryptedSign'=>''];

	public function loadLineParams($config = array()) {
		foreach ($config as $key => $val)
		{
			if (isset($this->lineParam[$key]))
			{
				$this->lineParam[$key] = $val;
			}
		}
	}
}