<?php
if (!isset($_SESSION)) session_start();
if(!isset($_SESSION["user"])){
   echo "Phai Dang nhap moi vao duoc";
    header("location:login.php");
}
echo" bạn đã đăng nhập thành công" ;
?>

<a href="logout.php" title="Logout">Logout</a>