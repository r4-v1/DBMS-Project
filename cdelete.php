<?php

  $con = mysqli_connect('localhost','root','root','dbms');


$sql = "DELETE FROM clubs WHERE c_id='" . $_GET["c_id"] . "'";
if (mysqli_query($con, $sql)) {
    header('Location: cview.php');
} else {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);

?>
