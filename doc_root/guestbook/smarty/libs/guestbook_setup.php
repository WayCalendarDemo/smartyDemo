<?php

/**

* Project: Guestbook Application
* Author: Wayland Harwood
* File: guestbook_setup.php
* Version 1.1

**/

require(GUESTBOOK_DIR . 'libs/guestbook.lib.php');
require(SMARTY_DIR . 'Smarty.class.php');


// smarty configuration
class Guestbook_Smarty extends Smarty {
  function __construct() {
    parent::__construct();
    $this->setTemplateDir(GUESTBOOK_DIR . 'templates');
    $this->setCompileDir(GUESTBOOK_DIR . 'templates_c');
    $this->setConfigDir(GUESTBOOK_DIR . 'configs');
    $this->setCacheDir(GUESTBOOK_DIR . 'cache');
  }
}

/**

* This file is where we do some basic application configuration, such as our
* database and template configs. We will be using the PDO database abstraction
* library available from PHP 5.
* We will be using MYSQL as our database, enter the appropriate dsn for your
* database setup.

* Refer to the file: guestbook.sql for the basic database setup.

**/

// https://www.smarty.net/sampleapp2

?>
