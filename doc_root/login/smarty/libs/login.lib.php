<?php

/**
 * Project: Login Application
 * Author: Wayland Harwood
 * File: login.lib.php
 * Version: 1.1
 */

 class Login {

   // database object
   var $pdo = null;
   // smarty template object
   var $tpl = null;
   // error messages
   var $error = null;



   function __construct() {

     // instantiate the template object
     $this->tpl = new Login_Smarty;

   }

   /**
   * display the login page
   *
   * @param array $formvars the form variables
   */
   function displaySignIn () {
     $this->tpl->assign('error', $this->error);
     $this->tpl->display('log_in.tpl');
   }

   function displaySignUp () {
     // assign error message
     $this->tpl->assign('error', $this->error);
     $this->tpl->display('sign_up.tpl');
   }

 }

?>
