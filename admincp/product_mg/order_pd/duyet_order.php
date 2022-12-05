<?php
include("../../PDO/pdo.php");
if(isset($_GET['id']))
{
        $id=$_GET['id'];
}else{
        $id=" ";
}
$sql =" UPDATE `hoadon` SET `trangthai`='1' where id_giohang='$id'";
$objStatement = $objPDO->prepare($sql);
$objStatement->execute();
header('location:order_detail.php');
?>