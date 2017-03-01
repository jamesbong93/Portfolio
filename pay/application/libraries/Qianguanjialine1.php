<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'libraries/baseonline/Qianguanjia.php');

class Qianguanjialine1 extends Qianguanjia {

	public $lineParam = ['AcctName'=>'JIM', 'BankId'=>'888'];

	public function __construct($config = array())
	{
		parent::__construct($config);
		log_message('info', 'Class' . get_class($this) . 'Initialized');
	}

	public function loadLineParams($config = array()) {
		foreach ($config as $key => $val)
		{
			if (isset($this->lineParam[$key]))
			{
				$this->lineParam[$key] = $val;
			}
		}
	}

	public function send() {
		var_dump($this->lineParam);
		echo '_______<br>';
		var_dump($this->platformParam);
		echo '_______<br>';
		var_dump($this->platformParamOptional);
		
	}

}