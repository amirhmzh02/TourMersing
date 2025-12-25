<?php
session_start();

include("connect.php");

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $_SESSION['user'] = $username;

    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT * FROM `admin` WHERE username = ? AND password = ?");
    
    // Bind parameters
    $stmt->bind_param("ss", $username, $pass);
    
    // Execute the statement
    $stmt->execute();
    
    // Bind the result variables
    $stmt->store_result();
    
    // Check if a row was returned
    if ($stmt->num_rows === 1) {
        // Optional: Fetch the data if needed
        $stmt->bind_result($id, $username, $hashed_password); // adjust the number of variables according to your `admin` table structure
        $stmt->fetch();
        
        // Redirect to admin dashboard
        header("Location: https://localhost/etourmersing/AdminDashboard/index.php");
        exit();
    } else {
        header("Location: https://localhost/etourmersing/Login.php?error=Wrong Username or Password");
        exit();
    }

    // Close the statement
    $stmt->close();
}

// Close the database connection
$conn->close();

?>
