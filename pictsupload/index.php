<?php
session_cache_limiter("public");
$expiry = 90; //days
session_cache_expire($expiry * 24 * 60);
session_start();
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__FILE__));
define('PATH',((dirname($_SERVER['PHP_SELF'])=='/'||dirname($_SERVER['PHP_SELF'])=='\\'||dirname($_SERVER['PHP_SELF'])=='/index.php'||dirname($_SERVER['PHP_SELF'])=='/backend.php')?'/':dirname($_SERVER['PHP_SELF']).'/'));

if(!file_exists(ROOT.DS.'inc'.DS.'config.inc.php'))
	exit('Rename /inc/example.config.inc.php to /inc/config.inc.php first!');
include_once(ROOT.DS.'inc'.DS.'config.inc.php');

if(FORCE_DOMAIN)
	define('DOMAINPATH',FORCE_DOMAIN);
else
	define('DOMAINPATH',(isset($_SERVER['HTTPS'])?'https':'http').'://'.$_SERVER['HTTP_HOST']);
error_reporting(E_ALL & ~E_NOTICE);
if(SHOW_ERRORS)
	ini_set('display_errors','On');
else ini_set('display_errors','Off');
include_once(ROOT.DS.'inc'.DS.'core.php');
$url = $_GET['url'];
removeMagicQuotes();
$GLOBALS['params'] = explode('/', $_GET['url']);
callHook();
// <a class="btn btn-primary btn-outline btn-lg" type="submit" id="submit" name="submit"  onClick="setTimeout(function(){document.getElementById(\'submit\').disabled = \'disabled\';}, 1);$(\'#movingBallG\').fadeIn()"><span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span> &nbsp 上传图片</a>