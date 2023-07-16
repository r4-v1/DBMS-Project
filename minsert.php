<?php

$con = mysqli_connect('localhost','root','root','dbms');

/*CLUB INSERTION CODE-----------------------*/

$mid = $_POST['mid'];
$mname = $_POST['mname'];
$mcid = $_POST['mcid'];
$mename = $_POST['mename'];
$meid = $_POST['meid'];
$mrole = $_POST['mrole'];

$sql = "INSERT INTO `members`(`m_id`,`mname`,`c_id`,`ename`,`e_id`,`role`) VALUES ('$mid','$mname','$mcid','$mename','$meid','$mrole')";


if (!empty($mid) && !empty($mcid) && !empty($meid)) {
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
  header('Location: minserth.php');
}


?>
