<?php 

session_start();
$id_sp=$_GET['id_sp'];
$type=$_GET['type'];

if($type=== 'tru')
{
   if($_SESSION['giohang'][$id_sp]['quantity'] > 1){
      $_SESSION['giohang'][$id_sp]['quantity']--;
 }else{
    unset($_SESSION['giohang'][$id_sp]);
 }
}else{ 
$_SESSION['giohang'][$id_sp]['quantity']++;
}
header('location:giohang.php');          