<?php
$con = mysqli_connect('localhost','root','root','dbms');

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h2 class="formh2">LOGIN FAILED!</h2>
    <h4 class="formh4">PLEASE INPUT VALID ID</h4>
    <button onclick="window.location.href='form.php';" class="formbtn" type="button" name="button">Try Again</button>

  </body>
</html>
