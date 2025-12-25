<?php

//include the DB connections details here
include("php/connect.php");

// header("location: home-page.php");

if (isset($_POST['email'])){

    $email = $_POST['email'];
    $passwd = $_POST['password'];

    $sql="SELECT * FROM `registration` WHERE email = '$email' and password = '$passwd'";
   
    // echo $sql;
    // exit();
    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)==1){
        echo "log in success";
        exit();
    }
    else{
        echo "log in not success";
        exit();
    }
}

?>
