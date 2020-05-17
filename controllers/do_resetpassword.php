<?php
require_once('config.php');
session_start();

$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);

if (isset($_POST['resetpass-btn'])) 
{
    
    
    if (isset($_SESSION['email'])) 
    {
      $email = $_SESSION['email'];
      
      $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password
      $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
      $result = mysqli_query($conn, $sql);

    

    if (mysqli_num_rows($result) > 0) {
        //$user = mysqli_fetch_assoc($result);
        $query = "UPDATE users SET password='$password' WHERE email='$email'";

        if (mysqli_query($conn, $query)) 
        {
            while($user = $result->fetch_assoc())
            {
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['verified'] = true;
                $_SESSION['message'] = "Your Password changed successfully.";
                $_SESSION['type'] = 'alert-success';
                header('location: index.php');
            }
            
            
            
        }
        else{
            echo "Password not updated!";
        }
    } 
    else 
    {
        echo "User not found!";
    }
} 
else 
{
    echo "No token provided!";
}

}
?>