<?php

include('connect.php');

    $username = $_POST['lid'];
    $password = $_POST['lpass'];

        //to prevent from mysqli injection
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "select *from leader where l_id = '$username' and loginpass = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            header("location:home.php");
        }
        else{
            header("location:loginfail.php");
        }



 ?>
