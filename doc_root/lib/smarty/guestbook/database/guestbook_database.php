<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $DB_USERNAME = 'root';
  $DB_PASSWORD = 'root';
  $DB_DATABASE = 'inventory';
  $DB_HOST = 'localhost';
  $DB_PORT = 8889;

  $link = mysql_connect(
     "$DB_HOST:$DB_PORT",
     $DB_USERNAME,
     $DB_PASSWORD
  );
  $db_selected = mysql_select_db(
     $DB_DATABASE,
     $link
  );


?>
