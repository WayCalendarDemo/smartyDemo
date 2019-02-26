<?php
/**

* Project: Guestbook application
* Author: Wayland Harwood
* File: index.php
* Version 1.1

**/
ini_set('display_errors',1);
error_reporting(E_ALL);

//define the doc root path
define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT'] );
// define the application directory
define('GUESTBOOK_DIR', DOC_ROOT . '/lib/smarty/guestbook/');
//define smarty lib directory
define('SMARTY_DIR', DOC_ROOT . '/lib/smarty/');
//include the setup script
include(GUESTBOOK_DIR . 'libs/guestbook_setup.php');

// create guestbook object
$guestbook = new Guestbook;

// set the current action
$_action = isset($_REQUEST['action']) ? $_REQUEST['action']: 'view';

switch($_action) {
  case 'add':
    // adding a guestbook entry
    $guestbook->displayForm();
    break;
  case 'submit':
    // submitting a guestbook entry
    $guestbook->mungeFormData($_POST);
    if($guestbook->isValidForm($_POST)) {
      $guestbook->addEntry($_POST);
      $guestbook->displayBook($guestbook->getEntries());
    } else {
      $guestbook->displayForm($_POST);
    }
    break;
  case 'view':
  default:
    // viewing the guestbook
    $guestbook->displayBook($guestbook->getEntries());
    break;
}


/**

* The entry point of the application.
* The web browser will be accessing this script directly
* This file acts as the application controller
* It defines the application directories, include the setup script, and direct an
* action depending on the action value from teh $_REQUEST super-global.
* There are three basic actions:
* add -> when a user wants to add an entry to the guestbook
* submit -> When a user submits an entry.
* view -> When the user displays the guestbook.
* The default action is view.

**/
?>
