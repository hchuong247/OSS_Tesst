<?php
    $conn =mysqli_connect("localhost","root","","webphukien");
    mysqli_set_charset($conn,"utf8");
    ?>
    <?php
session_start();
//unset($_SESSION['giohang']);
$id_sp=$_GET['id_sp'];
if (empty($_SESSION['giohang'][$id_sp])){
    $sql="SELECT * from sanpham join chitietsp on sanpham.ma_chitiet=chitietsp.ma_chitiet join hinhanh on 
    chitietsp.mahinh=hinhanh.mahinh where id_sp='$id_sp'";
    $result=mysqli_query($conn,$sql);
    $each=mysqli_fetch_array($result);
    $_SESSION['giohang'][$id_sp]['ma_chitiet']=$each['ma_chitiet'];
    $_SESSION['giohang'][$id_sp]['tensp']=$each['tensp'];
    $_SESSION['giohang'][$id_sp]['hinhanh']=$each['hinhanh'];
    $_SESSION['giohang'][$id_sp]['gia']=$each['gia'];
    $_SESSION['giohang'][$id_sp]['quantity']=1;
}else{
    
        $_SESSION['giohang'][$id_sp]['quantity']++;
    
     
}
echo json_encode($_SESSION['giohang']);
header('location:giohang.php');