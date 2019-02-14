<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT']);



/**

* Project: Login page
* Goal: To create a page where a person can join up and then login
* File: index.php
* Version: 1.1

**/

// define the application directory
define('SIGNUP_DIR', '../');


require('lib/smarty/Smarty.class.php');
$smarty = new Smarty();



$smarty->setTemplateDir('tpl');
$smarty->setCompileDir('../lib/smarty/templates_c');
$smarty->setCacheDir('../lib/smarty/smarty/cache');
$smarty->setConfigDir('../lib/smarty/configs');

$smarty->assign('name', 'ned');
$smarty->assign('pagetitle', 'Login Page');
$smarty->display('login.tpl');

?>
