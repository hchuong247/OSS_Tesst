<?php
session_start();
unset($_SESSION['user']);
// session_unset("user");
header('location:login.php');
?>