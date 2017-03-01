<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'libraries/baseonline/Mobao.php');

class Mobaoline1 extends Mobao {

	public $lineParam = [];

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