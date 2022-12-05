<?php
    $conn =mysqli_connect("localhost","root","","webphukien");
    mysqli_set_charset($conn,"utf8");

    $id = isset($_GET['pd_id'])?$_GET['pd_id']:'';
    if ($id != '')
    {
        $sanpham = "select ma_chitiet from sanpham where id_sp='$id'";
        $ma = "";
        $mahinhanh = "";
        $machitiet =mysqli_query($conn,$sanpham);
        foreach( $machitiet as $mact)
        {
              $ma=$mact[ma_chitiet];
        }
        $chitiet = "select mahinh from chitietsp where ma_chitiet='$ma'";
        $mahinh =mysqli_query($conn,$chitiet);
        foreach( $mahinh as $mahinha)
        {
              $mahinhanh=$mahinha[mahinh];
        }
        $sql1="DELETE FROM hinhanh WHERE  mahinh='$mahinhanh' ";
        $sql2="DELETE FROM chitietsp WHERE ma_chitiet='$ma' ";
        $sql="DELETE FROM sanpham WHERE id_sp='$id' ";
        mysqli_query($conn,$sql1);
        mysqli_query($conn,$sql2);
        mysqli_query($conn,$sql);
    }

header('location:delete.php');exit;

?>
