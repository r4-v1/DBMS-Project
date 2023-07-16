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
            <h1>Add your Member details Here</h1>
      			<span>Input all the required details</span>
          </div>
          <button onclick="window.location.href = 'home.php';" type="button" class="goback" name="button">Go Back</button>
        </div>
    		<form name="insform" class="insform" method="post" action="minsert.php">
    			<input type="cname" name="mid" id="mid" placeholder="Member ID" />
    			<input type="cname" name="mname" id="mname" placeholder="Member Name" />
          <input type="cname" name="mcid" id="mcid" placeholder="Club ID" />
    			<input type="cname" name="mename" id="mename" placeholder="Event Name" />
          <input type="cname" name="meid" id="meid" placeholder="Event ID" />
          <input type="cname" name="mrole" id="mrole" placeholder="Member Role" />
          <button type="submit" class="inscrt" name="button">Insert</button>
    		</form>
        <div class="insbtns">

          <button type="button" class="mnsrst" id="mnsrst" name="button">Reset</button>
        </div>
    	</div>
  </body>
</html>
