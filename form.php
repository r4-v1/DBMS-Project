<?php
 $con = mysqli_connect('localhost','root','root','dbms');
 ?>
 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="logstyle.css">
<title>DBMS Mini Project</title>
</head>

<body>
  <div class="container" id="container">
    <div class="form-container clubleadlogin">
      <form name="loginform" method="post" action="login.php">
        <h1>Leader Login</h1>
        <span>Input your details to access the club</span>
        <input type="cname" name="lid" id="lid" placeholder="Leader ID" />
        <input type="oname" name="lpass" id="lpass" placeholder="Password" />
        <input type="submit" name="Submit" id="button" value="Submit">
      </form>
    </div>
  </div>
</body>
</html>
