<?php
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT'] );

require(DOC_ROOT . '/lib/smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('tpl');
$smarty->setCompileDir(DOC_ROOT . '/lib/smarty/templates_c');
$smarty->setCacheDir(DOC_ROOT . '/lib/smarty/smarty/cache');
$smarty->setConfigDir(DOC_ROOT . '/lib/smarty/configs');
$smarty->assign('path', DOC_ROOT);

$smarty->assign('pagetitle', 'Foreach and Cycle');

// Assign an array of data
$smarty->assign('names', array('Fee','Fi','Fo','Fum'));
// Assign an associateive array of data
$smarty->assign('users', array(
  array('name' => 'Fee', 'number' => '12345 '),
  array('name' => 'Fi', 'number' => '5678'),
  array('name' => 'Fo', 'number' => '0123'),
  array('name' => 'Fum', 'number' => '4567')
));

$smarty->display('for_each_and_cycle.tpl');

?>
