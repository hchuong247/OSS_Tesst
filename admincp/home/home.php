<?php
    include("../PDO/pdo.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CD Store</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark">
  <a class="navbar-brand" href="../home/home.php">CD Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../sign_in/sign_in.php">LOGN OUT</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>

<div class="container">
  <h3>Chào mừng bạn đến với Admin CDStore</h3>
  <?php
    $sql = "SELECT * from sanpham";
    $objStatement = $objPDO->prepare($sql);
    $objStatement->execute();
    $n = $objStatement ->rowCount();
    // echo "co $n ket qua";
  ?>
  <ul class="list-group">
    <p><b>Tổng Quan</b></p>
    <li class="list-group-item">CD STORE have :<?php echo "$n" ?> All Item</li>
    <li class="list-group-item">CD STORE have :
        <?php 
            $sql = "SELECT * from sanpham where maloai='1'";
            $objStatement = $objPDO->prepare($sql);
            $objStatement->execute();
            $n = $objStatement ->rowCount();
            echo "$n";
        ?> Tai Nghe
    </li>
    <li class="list-group-item">CD STORE have :
        <?php 
            $sql = "SELECT * from sanpham where maloai='2'";
            $objStatement = $objPDO->prepare($sql);
            $objStatement->execute();
            $n = $objStatement ->rowCount();
            echo "$n";
        ?> Bàn Phím
    </li>
    <li class="list-group-item">CD STORE have :
        <?php 
            $sql = "SELECT * from sanpham where maloai='3'";
            $objStatement = $objPDO->prepare($sql);
            $objStatement->execute();
            $n = $objStatement ->rowCount();
            echo "$n";
        ?> SmartWatch
    </li>
  </ul>
      <!--Product Management-->
  <ul class="list-group">
    <p><b>Quản lí sản phẩm</b></p>
    <li class="list-group-item">
      Insert Product
      <a href="../product_mg/insert_pd/insert.php"><button type="button" class="btn btn-outline-dark">GO</button></a>
    </li>
    <li class="list-group-item">
      Delete Product
      <a href="../product_mg/delete_pd/delete.php"><button type="button" class="btn btn-outline-dark">GO</button></a>
    </li>
    <li class="list-group-item">
      Edit Product
      <a href="../product_mg/edit_pd/edit.php"><button type="button" class="btn btn-outline-dark">GO</button></a>
    </li>
    <li class="list-group-item">
      Show all products
      <a href="../product_mg/show_all_pd/show_all_pd.php"><button type="button" class="btn btn-outline-dark">GO</button></a>
    </li>
    <li class="list-group-item">
      Show all orders
      <a href="../product_mg/order_pd/order_detail.php"><button type="button" class="btn btn-outline-dark">GO</button></a>
    </li>
  </ul>
</div>
</body>
</html>


