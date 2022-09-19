<?php

    
$host       = "localhost";
$user       = "root";
$pass       = "";
$database   = "user";

    //Connection to database

    $conn = new mysqli($host, $user, $pass, $database);

    if(!$conn){
        die('connetion failed :' . mysqli_connect_error()); 
        

    }else{
        $conn->set_charset('utf8mb4');
        echo '<script>console.log("connection passed")</script>';
    }


?>