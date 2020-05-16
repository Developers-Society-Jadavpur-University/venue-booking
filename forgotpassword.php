<?php include 'config.php' ?>
<?php include 'controllers/sendlink_forgotpassword.php' ?>
<?php include 'header.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  <title>VBMS - Login</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth login">
         <!-- Display messages -->
        <?php if (isset($_SESSION['message'])): ?>
        <div class="alert <?php echo $_SESSION['type'] ?>">
          <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            unset($_SESSION['type']);
          ?>
        </div>
        <?php endif;?>

        <h3 class="text-center form-title">Forgot Password</h3>
        <form action="forgotpassword.php" method="post">
          <div class="form-group">
            <br>
            <label>Enter your Registered email</label>
            <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $username; ?>">
          </div>
          <!--<div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>-->
          <div class="form-group">
            <button type="submit" name="forgotpass-btn" class="btn btn-lg btn-block">Submit</button>
          </div>
        </form>
        <p><a href="login.php">Go to Login</a><p>
        
        </div>
    </div>
  </div>
</body>
</html>