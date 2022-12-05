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
  <h3>CD Store Quản lí - INSERT PRODUCT</h3>
  <?php
    $sql = "SELECT * from loaisp";
    $objStatement = $objPDO->prepare($sql);
    $objStatement->execute();
    $data = $objStatement->fetchAll(PDO::FETCH_OBJ);
  ?>
    <ul class="list-group">
    <p><b>Fill in product information</b></p>
        <form action="process_insert.php" method="post" enctype="multipart/form-data">
            <!-- <li class="list-group-item">
                <h5>ID PRODUCT</h5>
                <input type="text" class="form-control form-control-lg" placeholder="INPUT ID" name="pd_id">
            </li> -->
            <li class="list-group-item">
                <h5>NAME PRODUCT</h5>
                <input type="text" class="form-control form-control-lg" placeholder="INPUT NAME" name="pd_name">
            </li>
            <li class="list-group-item">
                <h5>CATEGORY PRODUCT</h5>
                <select name="maloai">
                <?php
                    foreach($data as $r)
                    {
                        ?>
                            <option value="<?php echo $r->maloai?>" > <?php echo $r->tenloai ?> </option>
                        <?php
                    }
                ?>
                </select>
            </li>
            <li class="list-group-item">
                <h5>PRICE PRODUCT</h5>
                <input type="number" class="form-control form-control-lg"  name="pd_price" placeholder="INPUT PRICE" min="1">
            </li>
            <li class="list-group-item">
                <h5>NSX</h5>
                <input type="text" class="form-control form-control-lg" placeholder="INPUT NSX" name="pd_nsx">
            </li>
            <li class="list-group-item">
                <h5>Mã chi tiết</h5>
                <input type="number" class="form-control form-control-lg" placeholder="INPUT MACT" name="pd_mact" min = "1">
            </li>
            <li class="list-group-item">
                <h5>Màu</h5>
                <input type="test" class="form-control form-control-lg" placeholder="INPUT MAU" name="pd_mau">
            </li>
            <li class="list-group-item">
                <h5>Số Lượng</h5>
                <input type="number" class="form-control form-control-lg" placeholder="INPUT SOLUONG" name="pd_sl" min = "1">
            </li>
            <li class="list-group-item">
                <h5>Mô tả</h5>
                <textarea class="form-control" rows="5" id="comment" name="pd_desc"></textarea>
            </li>
            <li class="list-group-item">
                <h5>Mã hình</h5>
                <input type="test" class="form-control form-control-lg" placeholder="INPUT MAHINH" name="pd_mahinh">
            </li>
            <li class="list-group-item">
                <h5>hình</h5>
                <input type="file" name="pd_hinh" placeholder="Image">
            </li>
            <!-- <li class="list-group-item">
                <h5>IMGE PRODUCT</h5>
                <input type="file" name="pd_img" placeholder="Image">
            </li> -->
            <button type="submit" value="Insert" class="btn btn-outline-dark btn-is">ENTER</button>
        </form>
    </ul>
   



<!--F O O T E R-->

</body>
</html>


