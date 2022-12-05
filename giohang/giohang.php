<!DOCTYPE html>
<html lang="en">
<head>
<title>Giỏ hàng
</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap4/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" href="../plugins/themify-icons/themify-icons.css">
<link rel="stylesheet" type="text/css" href="../plugins/jquery-ui-1.12.1.custom/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="../styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="../styles/stylehinh.css">
</head> 

<body>

<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="top_nav_left"></div>
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								
								</li>-->
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Main Navigation -->

		<div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="../index.php">CD<span>Store</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="../index.php">home</a></li>
							
								<li><a href="../tainghe.php?maloai=1">Tai nghe</a></li>
								<li><a href="../banphim.php?maloai=2">Bàn Phím</a></li>
								<li><a href="../dongho.php?maloai=3">SmartWatch</a></li>
								<li><a href="../contact.html">Liên hệ</a></li>
							</ul>
							<ul class="navbar_user">
								<!-- <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li> -->
							
								<li class="checkout">
									<a href="giohang.php">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<!-- <span id="checkout_items" class="checkout_items">2</span> -->
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>



	<div class="container contact_container">
		<div class="row">
			<div class="col">

				<!-- Breadcrumbs -->

				<div class="breadcrumbs d-flex flex-row align-items-center">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li class="active"><a href="contact.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Giỏ hàng</a></li>
					</ul>
				</div>

			</div>
		</div>
        <div class="container">
            <h1>Giỏ hàng</h1>
            <form id="cart-form" action="dathang.php?action=submit" method="POST">
            <?php
                    session_start();
                    if(!isset($_SESSION['giohang'])){
                        $giohang=[];
                    }
                    else
                    $giohang=$_SESSION['giohang'];
                    ?>
            <table>
                    <tr>
                        <th class="product-number">STT</th>
                        <th class="product-name">Tên sản phẩm</th>
                        <th class="product-img">Ảnh sản phẩm</th>
                        <th class="product-price">Đơn giá</th>
                        <th class="product-quantity">Số lượng</th>
                        <th class="total-money">Thành tiền</th>
                        <th class="product-delete">Xóa</th>
                    </tr>
                    <?php   
                    $num=0;
                    $price = 0;

                   foreach ($giohang as $id_sp => $each): 
                   $num = $num+1;
                   $price = $price + $each['gia'] *$each['quantity'];
                   ?>
                
                    <tr>
                    <td class="product-number"><?php echo $num?></td>
                         <td class="product-name"><?php echo $each['tensp']?></td>
                        <td class="product-img"><img src="../images/<?php echo $each['hinhanh']?>"></td>
                         <td class="product-price"><?php echo $each['gia']?></td>
                         <td class="product-quantity"><a href="updatesoluong.php?id_sp=<?php echo $id_sp ?>&type=tru">-</a>
                         
                         <input type="text" value="<?php echo $each['quantity'] ?>"><a href="updatesoluong.php?id_sp=<?php echo $id_sp ?>&type=cong">+</a></td>
                         <td class="total-money"> <?php echo $each['gia'] *$each['quantity']?></td>
                         <td><a href="xoagiohang.php?id_sp=<?php echo $id_sp ?>">Xóa</a></td>
                   
                    </tr>
                    <?php endforeach ?>
                  
                    <tr id="row-total"> 
                        <td class="product-number">&nbsp;</td>
                        <td class="product-name">Tổng tiền</td>
                        <td class="product-img">&nbsp;</td>
                        <td class="product-price">&nbsp;</td>
                        <td class="product-quantity">&nbsp;</td>
                        <td class="total-money"><?php echo $price?></td>
                        <td class="product-delete"></td>
                    </tr>
                </table>
                <hr>
                <input type="submit" name="order_click" value="Đặt hàng" />
            </form>
        </div>
		

    <!-- footer -->
    
    <!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popperjs/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Custom script - Các file js do mình tự viết -->
    <script src="../assets/js/app.js"></script>

		<!-- Contact Us -->

		<div class="row">

			<div class="col-lg-6 contact_col">
				<div class="contact_contents">
					<h1>Liên hệ</h1>
					<p>Liên hệ với chúng tôi</p>
					<div>
						<p>0909900029</p>
						<p>doan@gmail.com</p>
					</div>
					<div>
				
					</div>
					<div>
						<p>Open hours: 8.00-18.00 Thứ 2 đến thứ 7</p>
						<p>Chủ nhật: Closed</p>
					</div>
				</div>

				<!-- Follow Us -->

				<div class="follow_us_contents">
					<h1>Follow Us</h1>
					<ul class="social d-flex flex-row">
						<li><a href="#" style="background-color: #3a61c9"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #41a1f6"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #fb4343"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li><a href="#" style="background-color: #8f6247"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>

			</div>


	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2018 All Rights Reserverd. Template by <a href="#">Colorlib</a> &amp; distributed by <a href="https://themewagon.com">ThemeWagon</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/contact_custom.js"></script>
</body>

</html>

