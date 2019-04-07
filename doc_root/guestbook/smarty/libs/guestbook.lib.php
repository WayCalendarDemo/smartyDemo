<?php

/**
 * Project: Guestbook Application
 * Author: Wayland Harwood
 * File: guestbook.lib.php
 * Version: 1.1
 */

/**
 * guestbook application library
 *
 */
class Guestbook {

  // database object
  var $pdo = null;
  // smarty template object
  var $tpl = null;
  // error messages
  var $error = null;

  function __construct() {

    // instantiate the pdo object
    try {
      $this->pdo = new PDO('mysql:host=localhost; dbname=GUESTBOOK;', 'root', 'root');
    } catch (PDOException $e) {
      print $e->getMessage();
    }

    // instantiate the template object
    $this->tpl = new Guestbook_Smarty;

  }

	/**

	* __construct() is the class constructor. It is executed each time we instantiate
	* the guestbook object. It instantiates the PDO and Smarty objects as properties.
	* We can then access them from within our object methods

  * https://stackoverflow.com/questions/2583707/can-i-create-a-database-using-pdo-in-php

	**/



  /**
  * display the guestbook entry form
  *
  * @param array $formvars the form variables
  */
  function displayForm() {

    // assign error message
    $this->tpl->assign('error', $this->error);
    $this->tpl->display('guestbook_form.tpl');

  }

	/**

	* displayForm() is used for displaying the guestbook entry form. It assigns the
	* form variables and the form validation error message to the template, then
	* displays the form.

	**/



  /**
  * fix up form data if necessary
  *
  * @param array $formvars the form variables
  */
  function mungeFormData(&$formvars) {

    // trim off excess whitespace
    $formvars['Name'] = trim($formvars['Name']);
    $formvars['Title'] = trim($formvars['Title']);
    $formvars['Comment'] = trim($formvars['Comment']);

  }

	/**

	* mungeFormData() trims off whitespace from the form input.
	* This is called prior to form validation.
	* Notice the form data is passed into the method by reference so the changes
	* will affect the original array.

	**/



  /**
  * test if form information is valid
  *
  * @param array $formvars the form variables
  */
  function isValidForm($formvars) {

    // reset error message
    $this->error = null;
    // set error as an array
    $this->error = array();

    // test if "Name" or "Comment" is empty
    if(strlen($formvars['Name']) == 0 || strlen($formvars['Comment']) == 0 || strlen($formvars['Title']) == 0)  {
      // test if "Name" is empty
      if(strlen($formvars['Name']) == 0) {
        array_push($this->error, 'name_empty');
      }
      // test if "Name" is empty
      if(strlen($formvars['Title']) == 0) {
        array_push($this->error, 'title_empty');
      }
      // test if "Comment" is empty
      if(strlen($formvars['Comment']) == 0) {
        array_push($this->error, 'comment_empty');
      }
      return false;
    }

    // form passed validation
    return true;
  }


	/**

	* isValidForm() validates the form input. This is a simple test to see if the
	* Name or Comment was empty. If so, the appropriate error code is assigned to
	* the error property. (These error codes are used by the template later on).

	**/



  /**
  * add a new guestbook entry
  *
  * @param array $formvars the form variables
  */
   function addEntry($formvars) {
    try {
      $rh = $this->pdo->prepare("insert into GUESTBOOK values(0,?,NOW(),?,?)");
      $rh->execute(array($formvars['Name'],$formvars['Comment'],$formvars['Title']));
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    }
    return true;
  }

	/**

	* addEntry() enters a new guestbook entry into the database.
	* Note that PDO takes care of SQL escapement for the form vars.

	**/



  /**
  * get the guestbook entries
  */
  function getEntries() {

    try {
      foreach($this->pdo->query(
        "select * from GUESTBOOK order by EntryDate DESC") as $row)
      $rows[] = $row;
    } catch (PDOException $e) {
      print "Error!: " . $e->getMessage();
      return false;
    }
    return $rows;
  }


	/**

	* getEntries() gets al the guestbook entries from the database.

	**/



  /**
  * display the guestbook
  *
  * @param array $data the guestbook data
  */
  function displayBook($data = array()) {

    $this->tpl->assign('data', $data);
    $this->tpl->display('guestbook.tpl');

  }
}


/**

* displayBook() displays the guestbook entries.
* The $data array is expected to be an array of the guestbook entries.
* This is assigned to the template and then the template is displayed.

**/



/**

* guestbook.lib.php is the application class.
* It contains the main logic for our entire application.

**/

?>
