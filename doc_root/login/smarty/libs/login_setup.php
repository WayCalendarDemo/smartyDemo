<?php

/**

* Project: Guestbook Application
* Author: Wayland Harwood
* File: guestbook_setup.php
* Version 1.1

**/

require(LOGIN_DIR . 'libs/login.lib.php');
require(SMARTY_DIR . 'Smarty.class.php');


// smarty configuration
class Login_Smarty extends Smarty {
  function __construct() {
    parent::__construct();
    $this->setTemplateDir(LOGIN_DIR . 'templates');
    $this->setCompileDir(LOGIN_DIR . 'templates_c');
    $this->setConfigDir(LOGIN_DIR . 'configs');
    $this->setCacheDir(LOGIN_DIR . 'cache');
  }
}

/**

* This file is where we do some basic application configuration, such as our
* database and template configs. We will be using the PDO database abstraction
* library available from PHP 5.
* We will be using MYSQL as our database, enter the appropriate dsn for your
* database setup.

**/

?>
