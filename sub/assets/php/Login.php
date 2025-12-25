<?php
session_start();


include("connect.php");

if (isset($_POST['login'])){

    $username = $_POST['username'];
    $pass = $_POST['password'];
    $_SESSION['user']=$username;

    $select_user="SELECT * FROM `admin` WHERE username = '$username' and password = '$pass'";
    $result = mysqli_query($conn,$select_user);

    
    /////////////////////////////
    
 

    if(mysqli_num_rows($result)==1){
        header("location:https://etourmersing.com/AdminDashboard/index.php");
        exit();
    }
    else{
        header("location:https://etourmersing.com/Login.html?error=Wrong Username or Password");
        exit();
    }
    
    ///////////////////////////////
    
    
    

    // $row = mysqli_fetch_assoc($result);
    

    // if (password_verify('$pass', $row['password'])) {
       
    //     header("location:https://etourmersing.com/AdminDashboard/index.php");
    //     exit();
    // } else {
    //     header("location:https://etourmersing.com/Login.php?error=Wrong Username or Password");
    //     exit();
    // }


    
    
}


?>
