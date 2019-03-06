<?php

/**

* Project: login application
* Author: Wayland Harwood
* File: index.php
* Version 1.1

**/

ini_set('display_errors',1);
error_reporting(E_ALL);

//define the doc root path
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT'] );
// define the application directory
define('LOGIN_DIR', DOC_ROOT . '/login/smarty/');
//define smarty lib directory
define('SMARTY_DIR', DOC_ROOT . '/lib/smarty/');
//include the setup script
include(LOGIN_DIR . 'libs/login_setup.php');

$login = new Login;

// set the current action
$_action = isset($_REQUEST['action']) ? $_REQUEST['action']: 'view';

switch($_action) {
  case 'signup':
  $login->displaySignUp();
  break;
  case 'signin':
  default:
  // // Initial view
  $login->displaySignIn();
  break;
}


?>
