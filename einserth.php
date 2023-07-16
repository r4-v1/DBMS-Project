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
            <h1>Add your event Here</h1>
      			<span>Input all the required details</span>
          </div>
          <button onclick="window.location.href = 'home.php';" type="button" class="goback" name="button">Go Back</button>
        </div>
    		<form name="insform" class="insform" method="post" action="einsert.php">
    			<input type="cname" name="ename" id="ename" placeholder="Event Name" />
    			<input type="cname" name="eid" id="eid" placeholder="Event ID" />
          <input type="cname" name="ecid" id="ecid" placeholder="Club ID" />
    			<input type="cname" name="eyear" id="eyear" placeholder="Year" />
          <input type="cname" name="erating" id="erating" placeholder="Rating" />
          <button type="submit" id="inscrt" class="inscrt" name="button">Insert</button>
    		</form>
        <div class="insbtns">

          <button onclick="window.location.href='einserth.php';" type="button" id="ensrst" class="ensrst" name="button">Reset</button>
        </div>
    	</div>
  </body>
</html>
