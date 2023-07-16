<?php

/*EVENT INSERTION CODE------------------------*/

$con = mysqli_connect('localhost','root','root','dbms');


$evname = $_POST['ename'];
$evid = $_POST['eid'];
$evcid = $_POST['ecid'];
$evyear = $_POST['eyear'];
$evrating = $_POST['erating'];

$sql = "INSERT INTO `events`(`ename`,`e_id`,`c_id`,`year`,`rating`) VALUES ('$evname','$evid','$evcid','$evyear','$evrating')";

if (!empty($evname) && !empty($evid)) {
  $rs = mysqli_query($con, $sql);
  if($rs)
  {
    header('Location: home.php');
  }
  else {
  	echo "Not possible";
  }
}
else {
  header('Location: einserth.php');
}





 ?>
