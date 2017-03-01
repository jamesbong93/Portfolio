<?php
defined('BASEPATH') OR exit('No direct script access allowed');

abstract class Online {

	public $template = '';

	public function __construct($config = array())
	{
		$this->CI =& get_instance();
		$this->CI->lang->load('online');

		empty($config) OR $this->loadPlatformParams($config);

		log_message('info', 'abstract Class Online Initialized');
	}

	//读取平台参数
	abstract public function loadPlatformParams($config = array());

	//读取线参数
	abstract public function loadLineParams($config = array());

	//发送请求至第三方平台
	abstract public function send();

}