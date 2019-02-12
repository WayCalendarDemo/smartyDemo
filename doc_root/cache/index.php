<?php
set_include_path( get_include_path() . PATH_SEPARATOR . $_SERVER['DOCUMENT_ROOT']);

require('lib/smarty/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('tpl');
$smarty->setCompileDir('../lib/smarty/templates_c');
$smarty->setCacheDir('../lib/smarty/smarty/cache');
$smarty->setConfigDir('../lib/smarty/configs');


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
