<?php
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT'] );

require(DOC_ROOT . '/lib/smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('tpl');
$smarty->setCompileDir(DOC_ROOT . '/lib/smarty/templates_c');
$smarty->setCacheDir(DOC_ROOT . '/lib/smarty/smarty/cache');
$smarty->setConfigDir(DOC_ROOT . '/lib/smarty/configs');
$smarty->assign('path', DOC_ROOT);

$smarty->assign('pagetitle', 'Cache');

// See if the apge is already cached
if(!$smarty->isCached('index.tpl')) {

  // not cached, so you might do some database queries here,
  // then assign the returned content.
  // In this example, static values are used
  $smarty->assign('name', 'Fred');
} else {
  $smarty->assign('name', 'Ned');
}

$smarty->display('cache.tpl');

?>
