<?php
session_destroy();
unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['role']);
unset($_SESSION['verify']);
header("location: login.php");
?>