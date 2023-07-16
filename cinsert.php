<?php

$con = mysqli_connect('localhost','root','root','dbms');

/*CLUB INSERTION CODE-----------------------*/

$cuslid = $_POST['clid'];
$cusid = $_POST['cid'];
$cusname = $_POST['cname'];
$cusloca = $_POST['cloca'];
$cuscateg = $_POST['ccateg'];

$sql = "INSERT INTO `clubs`(`l_id`,`c_id`,`cname`,`location`,`category`) VALUES ('$cuslid','$cusid','$cusname','$cusloca','$cuscateg')";


if (!empty($cuslid) && !empty($cusid) && !empty($cusname) && !empty($cusloca) && !empty($cuscateg)) {
  $rs = mysqli_query($con, $sql);
  if($rs)
  {
    header('Location: home.html');
  }
  else {
  	echo "Not possible";
  }
}
else {
  header('Location: cinserth.php');
}


?>
