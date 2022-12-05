<?php
if (!isset($_SESSION)) session_start();
include "../config.php";
if(isset($_POST['submit']) && $_POST["username"] != '' && $_POST ["password"] != '' ){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $password =md5($password);
$sql = "SELECT * FROM user WHERE email='$username' AND matkhau='$password'";
$user = mysqli_query($conn,$sql);
$row = mysqli_fetch_row($user);
if($row[5] == 0){
    $_SESSION["user"] =$username;
    header('location:../index.php');
}
else if($row[5] == 1)
{
    $_SESSION["user"] =$username;
    header('location:../admincp/home/home.php');
}
else{
    $_SESSION["thongbao"]="sai tai khoan hoac mat khau";
    header('location:login.php');
}
}
else{
    $_SESSION["thongbao"]="ban phai nhap du username password";
    header('location:login.php');
    die();
}
?>