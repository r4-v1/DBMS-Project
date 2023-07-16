<?php
$con = mysqli_connect('localhost','root','root','dbms');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="instyle.css">
  </head>
  <body>
    	<div class="insert-form">
        <div class="inshead">
          <div class="inscontent">
            <h1>Make your Club Here</h1>
      			<span>Input all the required details</span>
          </div>
          <button onclick="window.location.href = 'home.php';" type="button" class="goback" name="button">Go Back</button>
        </div>
        <div class="container">
          <form name="insform" class="insform" method="post" action="cinsert.php">
      			<input type="cname" name="clid" id="clid" placeholder="Your Leader ID" />
      			<input type="cname" name="cid" id="cid" placeholder="Club ID" />
            <input type="cname" name="cname" id="cname" placeholder="Name of the club" />
      			<input type="cname" name="cloca" id="cloca" placeholder="Location" />
            <input type="cname" name="ccateg" id="ccateg" placeholder="Club Category" />
            <button type="submit" id="inscrt" class="inscrt" name="button">Create</button>
      		</form>
          <div class="insbtns">
            <button onclick="window.location.href = 'cinserth.php';" type="button" id="insrst" class="insrst" name="button">Reset</button>
          </div>
        </div>

    	</div>
  </body>
</html>
