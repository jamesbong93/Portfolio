<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH.'libraries/baseonline/Xbeiwx.php');

class Xbeiwxline1 extends Xbeiwx {

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