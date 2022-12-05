<!DOCTYPE html>
<html lang="en">

<head>
	<title>Registation Form * Form Tutorial</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9 " style="padding-top:13rem">


            <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Đăng nhập User</h1>
                </div>
                <p>
                    <?php
                    session_start();
                    if(isset($_SESSION["thongbao"])){
                        echo $_SESSION['thongbao'];
                        session_unset();
                    }
                    ?>
                </p>
                <form action="login_submit.php" method="post" >
                    <div class="form-group">
                        <input type="email" class="form-control form-control-user"
                            id="exampleInputEmail" name="username" aria-describedby="emailHelp"
                            placeholder="Enter Email Address...">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control form-control-user"
                            id="exampleInputPassword" name="password" placeholder="Password">
                    </div>
                    <button class="btn btn-primary btn-user btn-block" style="background-color:#DDDDDD " type="submit" name="submit" >Login</button>
                    <p>Chưa có tài khoản? <a href="./register.php">đăng ký</a></p>
                    <!-- <a href="index.html" class="btn btn-primary btn-user btn-block" style="background-color:#DDDDDD " >
                        <DIV STYLE="color: black;">
                            ĐĂNG NHẬP
                        </DIV>
                    </a>          -->
                </form>
                <hr>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>