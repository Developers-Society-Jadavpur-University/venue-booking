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
    /*if (empty($_POST['username'])) {
        $errors['username'] = 'Username required';
    }*/
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
    
    /*if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    if (isset($_POST['password']) && $_POST['password'] !== $_POST['passwordConf']) {
        $errors['passwordConf'] = 'The two passwords do not match';
    }*/

    
    $email = $_POST['email'];
    
    //$token = bin2hex(random_bytes(50)); // generate unique token
    //$password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password

    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        
        while($row = $result->fetch_assoc())
        {
            $token = $row['token'];
        }
        /*Start the process of forgot password here*/
        sendpasswordResetEmail($email,$token);
        header('location: forgotpassword.php');
        /*Here a message has to be shown that your password reset email has been sent */

        
    }
    else{
        $errors['email'] = "Email is not Registered in our system";
    }

    
}

