<?php
  ini_set('display_errors',1);
  error_reporting(E_ALL);

  $user = 'root';
  $password = 'root';
  $db = 'GUESTBOOK';
  $host = 'localhost';
  $port = 8889;

  $link = mysqli_init();
  $success = mysqli_real_connect(
     $link,
     $host,
     $user,
     $password,
     $db,
     $port
  );

?>
