<?php

/**

* Project: Login page
* Goal: To create a page where a person can join up and then login
* File: index.php
* Version: 1.1

**/

// define the doc root
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT'] );
// define the application directory
define('SIGNUP_DIR', DOC_ROOT . '/signup/');
// define smarty library directory
define('SMARTY_DIR', DOC_ROOT . '/lib/smarty/');
// include the setup script
include(SIGNUP_DIR, '/lib/signup_setup.php');

// create a signup object
$signup = new Signup;

// set the current action
$_action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'view';

switch($_action) {
  case 'signin':
    //show sign in page

  break;
  default:
    //show signup page

  break;
}


/**

* This file is the application controller.
* It handles all incoming browser requests and directs actions to take.
* It will define our application directories, include the setup script, and
* direct an action depending on the value from teh 

**/

?>




<!-- https://www.smarty.net/sampleapp2 -->
