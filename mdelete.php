<?php

  $con = mysqli_connect('localhost','root','root','dbms');


$sql = "DELETE FROM members WHERE m_id='" . $_GET["m_id"] . "'";
if (mysqli_query($con, $sql)) {
    header('Location: mview.php');
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);




?>
