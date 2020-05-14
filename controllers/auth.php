<?php
require_once 'sendemail.php';
// session_start();
if(!isset($_SESSION)){
    session_start();
}
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
if (isset($_POST['signup-btn'])) {
    if (empty($_POST['username'])) {
        $errors['username'] = 'Username required';
    }
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    if (isset($_POST['password']) && $_POST['password'] !== $_POST['passwordConf']) {
        $errors['passwordConf'] = 'The two passwords do not match';
    }

    $username = $_POST['username'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $token = bin2hex(random_bytes(50)); // generate unique token
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //encrypt password

    // Check if email already exists
    $sql = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $errors['email'] = "Email already exists";
    }

    if (count($errors) === 0) {
        $query = "INSERT INTO users SET username=?, role=?, email=?, token=?, password=?";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('sssss', $username, $role, $email, $token, $password);
        $result = $stmt->execute();

        if ($result) {
            $user_id = $stmt->insert_id;
            $stmt->close();

            //Send verification email to user
            sendVerificationEmail($email, $token);
            
            //Setting the session variables
            $_SESSION['id'] = $user_id;
            $_SESSION['username'] = $username;
            $_SESSION['role'] = $role;
            $_SESSION['email'] = $email;
            $_SESSION['verified'] = false;
            $_SESSION['message'] = 'You are logged in!';
            $_SESSION['type'] = 'alert-success';
            //Logging the user in
            header('location: index.php');
        } else {
            $_SESSION['error_msg'] = "Database error: Could not register user";
        }
    }
}

// LOGIN
if (isset($_POST['login-btn'])) {
    if (empty($_POST['email'])) {
        $errors['email'] = 'Email required';
    }
    if (empty($_POST['password'])) {
        $errors['password'] = 'Password required';
    }
    //this part needs changes - username and/or email requirement needs to be fixed
    $email = $_POST['email'];
    $username = $_POST['email'];
    $password = $_POST['password'];

    if (count($errors) === 0) {
        $query = "SELECT * FROM users WHERE email=? LIMIT 1";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $email);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $user = $result->fetch_assoc();
            if (!empty($user)) {
                if (password_verify($password, $user['password'])) { // if password matches
                // // generate OTP
                // $otp = rand(100000,999999);
                // // Send OTP
                // $mail_status = sendOTP($_POST["email"],$otp);


                // if($mail_status == true) {
                //     $result = mysqli_query($conn,"INSERT INTO otp_expiry(otp,is_expired,create_at) VALUES ('" . $otp . "', 0, '" . date("Y-m-d H:i:s"). "')");
                //     $current_id = mysqli_insert_id($conn);
                //     if(!empty($current_id)) {
                //         $success=1;
                //     }
                // }
                // if(!empty($_POST["submit_otp"])) {
                //     $result = mysqli_query($conn,"SELECT * FROM otp_expiry WHERE otp='" . $_POST["otp"] . "' AND is_expired!=1 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)");
                //     $count  = mysqli_num_rows($result);
                //     if(!empty($count)) {
                //         $result = mysqli_query($conn,"UPDATE otp_expiry SET is_expired = 1 WHERE otp = '" . $_POST["otp"] . "'");
                //         $success = 2;	
                //     } else {
                //         $success =1;
                //         $error_message = "Invalid OTP!";
                //     }	
                // }

                $stmt->close();

                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['verified'] = $user['verified'];
                $_SESSION['message'] = 'You are logged in!';
                $_SESSION['type'] = 'alert-success';
                header('location: index.php');
                exit(0);
            } else { // if password does not match
                $errors['login_fail'] = "<center>Wrong username / password</center>";
            }
        } else {
            $errors['login_fail'] = "<center>Account does not exist</center>";
        }
        } else {
            $_SESSION['message'] = "Database error. Login failed!";
            $_SESSION['type'] = "alert-danger";
        }
    }
}