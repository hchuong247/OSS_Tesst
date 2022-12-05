<?php
session_start();
$id_sp=$_GET['id_sp'];
unset($_SESSION['giohang'][$id_sp]);
header('location:giohang.php');