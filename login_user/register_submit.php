<?php 
if (!isset($_SESSION)) session_start();
include "../config.php";
if(isset($_POST['submit']) && $_POST["email"] != '' && $_POST ["password"] != '' && $_POST["repassword"] != ''
&& $_POST["hoten"] != ''&& $_POST["sodt"] != ''&& $_POST["diachi"] != ''){
    // Thực hiện xử lý khi người dùng ấn nút submit và đầy đủ thông tin
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repassword =$_POST["repassword"];
    $hoten = $_POST["hoten"];
    $sdt = $_POST["sodt"];
    $diachi = $_POST["diachi"];
    $loai = 0;
    if($password !=$repassword){
        $_SESSION["thongbao"]="Password nhap lai khong chinh xac";
        header("location:register.php");
        die();
    }
    $sql = "SELECT * FROM user WHERE email='$email'";
    $old = mysqli_query($conn,$sql);
    if( mysqli_num_rows($old)> 0){
        $_SESSION["thongbao"]="Username da ton tai";
        header("location:register.php");
        die();
    }
    $password =md5($password);
    $sql ="INSERT INTO `user` (`email`, `matkhau`, `hoten`, `sdt`, `diachi`, `loai`) VALUES ('$email', '$password', '$hoten', '$sdt', '$diachi', '$loai')";
    mysqli_query($conn,$sql);
    $_SESSION["thongbao"]="Da dang ky thanh cong";
    header('location:login.php');
}else{
    $_SESSION["thongbao"] = "Vui long nhap day du thong tin";
    header("lacation:register.php");
}
?>



