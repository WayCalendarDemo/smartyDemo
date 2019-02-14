<?php
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT'] );

require(DOC_ROOT . '/lib/smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('tpl');
$smarty->setCompileDir(DOC_ROOT . '/lib/smarty/templates_c');
$smarty->setCacheDir(DOC_ROOT . '/lib/smarty/smarty/cache');
$smarty->setConfigDir(DOC_ROOT . '/lib/smarty/configs');
$smarty->assign('path', DOC_ROOT);

$smarty->assign('name', 'ned');
$smarty->assign('pagetitle', 'html-options');

$smarty->assign('id', array(1,2,3,4));
$smarty->assign('names', array('Fee', 'Fi', 'Fo', 'Fum'));

$smarty->display('html_options.tpl');



?>
