<?php
 session_start();
$conn =mysqli_connect("localhost","root","","webphukien");
mysqli_set_charset($conn,"utf8");
$cart = $_SESSION['giohang'];
$tonggia = 0;
foreach($cart as $each){
    $tonggia +=$each['gia'] *$each['quantity'];
}
$status =0;
$email =$_SESSION["user"];
$sql = "INSERT INTO hoadon ( `email`, `tongtien`, `trangthai`) VALUES ('$email','$tonggia','$status')";
mysqli_query($conn,$sql);
$sql = "select max(id_giohang) from hoadon ";
$result =  mysqli_query($conn,$sql);
$order_id = mysqli_fetch_array($result)['max(id_giohang)'];
foreach ($cart as $each){
    $mact = $each['ma_chitiet'] ;
    $soluong = $each['quantity'] ;
    $dongia =$each['gia'];
    $sql = "INSERT INTO chitiethoadon (`ma_chitiet`,`id_giohang`, `soluong`, `dongia`) VALUES ('$mact','$order_id','$soluong','$dongia')";
    mysqli_query($conn,$sql);
}
 unset ($_SESSION['giohang']);
 header('location:giohang.php');
// $sql = "INSERT INTO hoadon ( `maloai`, `tensp`, `nsx`, `ma_chitiet`, `gia`) VALUES ('$cat','$n','$nsx','$mact','$pr')";
// $sql="insert into customers(name,email,password) value ('$name','$email','$pasword'";
// mysqli_query($conn,$sql);
// $sql="select id from hoadon
// where email='$emall'";
// $result=mysqli_query($conn,$sql);
// $id=mysqli_fetch_array($result)['id_sp'];
// session_start();
// $_SESSION['id_sp']=$id;
// $_SESSION['name']=$name;
mysqli_close($conn);
