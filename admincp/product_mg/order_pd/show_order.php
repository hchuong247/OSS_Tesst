<?php
include("../../PDO/pdo.php");
        if(isset($_GET['id']))
        {
                $id=$_GET['id'];
        }else{
                $id=" ";
        }
        $sql = "SELECT * FROM `chitiethoadon` join `sanpham` on chitiethoadon.ma_chitiet=sanpham.ma_chitiet  WHERE id_giohang='$id'";
        $objStatement = $objPDO->prepare($sql);
        $objStatement->execute();
        $data = $objStatement->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CD Store </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<!--M E N U-->    
<nav class="navbar navbar-expand-md navbar-dark">
  <a class="navbar-brand" href="../../home/home.php">CD Store </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="../../sign_in/sign_in.php">LOGN OUT</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>
<!--C O N T A I N E R-->
<div class="container">
  <h3>CD Store Quản lí -ORDER PRODUCTS</h3>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID </th>
        <th>Tên SP</th>
        <th>Số Lượng</th>
        <th>Giá</th>  
      </tr>
    </thead>
    <tbody>
    <?php
        foreach($data as $r)
        {
            ?>
              <tr>
                <td><?php echo $r->ma_chitiet ?></td>
                <td><?php echo $r->tensp ?></td>
                <td><?php echo $r->soluong ?></td>
                <td><?php echo $r->dongia ?></td>
              </tr>
      <?php
        }
        ?>
    </tbody>
  </table>
</div>


<!--F O O T E R-->

</body>
</html>