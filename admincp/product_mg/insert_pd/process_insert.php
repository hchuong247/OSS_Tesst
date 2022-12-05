<?php
    $conn =mysqli_connect("localhost","root","","webphukien");
    mysqli_set_charset($conn,"utf8");
    // $id = isset($_POST['pd_id'])?$_POST['pd_id']:'';
    $n = isset($_POST['pd_name'])?$_POST['pd_name']:'';
    $cat = isset($_POST['maloai'])?$_POST['maloai']:'';
    $pr = isset($_POST['pd_price'])?$_POST['pd_price']:'';
    $nsx = isset($_POST['pd_nsx'])?$_POST['pd_nsx']:'';
    $mact = isset($_POST['pd_mact'])?$_POST['pd_mact']:'';
    $mau = isset($_POST['pd_mau'])?$_POST['pd_mau']:'';
    $soluong = isset($_POST['pd_sl'])?$_POST['pd_sl']:'';
    $mota = isset($_POST['pd_desc'])?$_POST['pd_desc']:'';
    $mahinh = isset($_POST['pd_mahinh'])?$_POST['pd_mahinh']:'';
    $hinh = isset($_POST['pd_hinh'])?$_POST['pd_hinh']:'';

    if (isset($_FILES['pd_hinh']))    
    {
        if ($_FILES['pd_hinh']['error']==0)
        {
            $img = $_FILES['pd_hinh']['name'];
            move_uploaded_file($_FILES['pd_hinh']['tmp_name'], "../../../images/$img");
        }
    }
    $sql = "INSERT INTO sanpham ( `maloai`, `tensp`, `nsx`, `ma_chitiet`, `gia`) VALUES ('$cat','$n','$nsx','$mact','$pr')";
    $chitiet = "INSERT INTO chitietsp ( `ma_chitiet`, `mau`, `mahinh`, `mota`, `soluong`) VALUES ('$mact','$mau','$mahinh','$mota','$soluong')";
    $hinh = "INSERT INTO hinhanh ( `mahinh`, `hinhanh`) VALUES ('$mahinh','$img')";
    mysqli_query($conn,$sql);
    mysqli_query($conn,$chitiet);
    mysqli_query($conn,$hinh);
    header("location:./insert.php");
?>

