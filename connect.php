<?php
  $con = mysqli_connect('localhost','root','root', 'dbms');


  if ($con->connect_error) {
      die("Connection failed: " . $con->connect_error);
  }
  echo "Connected successfully";
?>
