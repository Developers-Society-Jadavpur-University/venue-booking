<?php
require_once 'sendemail.php';
session_start();
$username = "";
$email = "";
$errors = [];

$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

// Check connection
if ($conn -> connect_errno) {
  echo "Failed to connect to MySQL: " . $conn -> connect_error;
  exit();
}

// SIGN UP USER
if (isset($_POST['forgotpass-btn'])) {
    
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
    
    $email = $_POST['email'];
   

    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) 
    {
        
        while($row = $result->fetch_assoc())
        {
            $token = $row['token'];
        }
        /*Start the process of forgot password here*/
        sendpasswordResetEmail($email,$token);
        $_SESSION['message'] = "An Email has been sent to you with link for changing password";
        $_SESSION['type'] = 'alert-success';
        header('location: forgotpassword.php');
        /*Here a message has to be shown that your password reset email has been sent */

        
    }
    else
    {
        
        $errors['email_fail'] = "Email is not Registered in our System";
    }

    
}

