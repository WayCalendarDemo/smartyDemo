<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT']);

require('lib/smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('tpl');
$smarty->setCompileDir('../lib/smarty/templates_c');
$smarty->setCacheDir('../lib/smarty/smarty/cache');
$smarty->setConfigDir('../lib/smarty/configs');

$smarty->assign('name', 'ned');
$smarty->assign('pagetitle', 'html-options');

$smarty->assign('id', array(1,2,3,4));
$smarty->assign('names', array('Fee', 'Fi', 'Fo', 'Fum'));

$smarty->display('html_options.tpl');



?>
