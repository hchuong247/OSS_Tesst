<?php
    $conn =mysqli_connect("localhost","root","","webphukien");
    mysqli_set_charset($conn,"utf8");

    $id = isset($_POST['id_sp'])?$_POST['id_sp']:'';
    $mact = isset($_POST['ma_ct'])?$_POST['ma_ct']:'';
    $mahinh = isset($_POST['mahinh'])?$_POST['mahinh']:'';
    $n = isset($_POST['pd_name'])?$_POST['pd_name']:'';
    $cat = isset($_POST['cat_id'])?$_POST['cat_id']:'';
    $pr = isset($_POST['pd_price'])?$_POST['pd_price']:'';
    $de = isset($_POST['pd_desc'])?$_POST['pd_desc']:'';
    $nsx = isset($_POST['pd_nsx'])?$_POST['pd_nsx']:'';
    $mau = isset($_POST['pd_mau'])?$_POST['pd_mau']:'';
    $soluong = isset($_POST['pd_sl'])?$_POST['pd_sl']:'';
    $img="";


    
    $sql_pd = "SELECT hinhanh from hinhanh where mahinh='$mahinh'";
    $data1 = mysqli_query($conn,$sql_pd);   
    
    if (isset($_FILES['pd_img']))    
    {
        if ($_FILES['pd_img']['error']==0)
        {
            $img = $_FILES['pd_img']['name'];
            move_uploaded_file($_FILES['pd_img']['tmp_name'], "../../../images/$img");
        }
    
    }
    if($img == "")
    {
       foreach($data1 as $data)
       {
        $img = $data['hinhanh'];
       } 
    }

    $sql =" UPDATE `sanpham` SET `maloai`='$cat',`tensp`='$n',`nsx`='$nsx',`ma_chitiet`='$mact',`gia`='$pr' WHERE `id_sp`='$id'"; 
    mysqli_query($conn,$sql);
    $sql1  =" UPDATE `chitietsp` SET `mau`='$mau',`mahinh`='$mahinh',`mota`='$de',`soluong`='$soluong' WHERE `ma_chitiet`='$mact'";
    mysqli_query($conn,$sql1);
    $sql2  =" UPDATE `hinhanh` SET `hinhanh`='$img' WHERE `mahinh`='$mahinh'";
    mysqli_query($conn,$sql2);
    header("location:./edit.php");



?>