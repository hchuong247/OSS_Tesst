<?php
    include("../../PDO/pdo.php")
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
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
<!--M E N U-->    
<nav class="navbar navbar-expand-md navbar-dark">
  <a class="navbar-brand" href="../../home/home.php">CD Store</a>
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
  <h3>CD Store Quản lí -EDIT PRODUCTS</h3>
  <?php
    $sql = "SELECT * from sanpham join chitietsp on sanpham.ma_chitiet=chitietsp.ma_chitiet join hinhanh on 
    chitietsp.mahinh=hinhanh.mahinh";
    $objStatement = $objPDO->prepare($sql);
    $objStatement->execute();
    $data = $objStatement->fetchAll(PDO::FETCH_OBJ);
  ?>
    <?php
        foreach($data as $r)
        {
            ?>
                <div class="row">
                    <div class="col img">
                        <div>
                          <img src="../../../images/<?php echo $r->hinhanh?>" alt="img">
                        </div>
                    </div>
                    <div class="col-7 ">
                        <div>
                            <h5>NAME PRODUCT</h5>
                            <p><?php echo $r->tensp ?></p>
                        </div><hr>
                        <div>
                            <h5>ID PRODUCT</h5>
                            <p>#<?php echo $r->id_sp ?></p>
                        </div><hr>
                        <div>
                            <h5>PRICE PRODUCT</h5>
                            <p>$<?php echo $r->gia ?>.00</p>
                        </div><hr>
                        <div>
                            <h5>NSX</h5>
                            <p><?php echo $r->nsx ?></p>
                        </div>
                        <div>
                            <a href="./edit_detail.php?id_sp=<?php echo $r->id_sp?>"><button type="submit" class="btn btn-danger" value="Upload Image">EDIT</button></a>
                        </div>
                    </div><hr>
                </div><hr id="end">
            <?php
        }
    ?>
</div>


<!--F O O T E R-->

</body>
</html>


