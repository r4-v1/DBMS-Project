<?php

  $con = mysqli_connect('localhost','root','root','dbms');


$sql = "DELETE FROM events WHERE e_id='" . $_GET["e_id"] . "'";
if (mysqli_query($con, $sql)) {
    header('Location: eview.php');
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);




?>
