<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'libraries/baseonline/Online.php');

abstract class Qianguanjia extends Online {

	public $platformParam = ['Version'=>'v5', 'CmdId'=>'88', 'CustId'=>'88', 'OrdId'=>'88', 'OrdAmt'=>'88'];

	public $platformParamOptional = ['SubAcctId'=>'88', 'MerPriv'=>'88'];

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
	}

}