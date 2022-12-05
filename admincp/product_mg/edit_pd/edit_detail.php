<?php
    include("../../PDO/pdo.php");
    if(isset($_GET['id_sp']))
    {
            $id_sp=$_GET['id_sp'];
    }else{
            $id_sp=" ";
    }
    $sql_pd = "SELECT * from sanpham join chitietsp on sanpham.ma_chitiet=chitietsp.ma_chitiet join hinhanh on 
    chitietsp.mahinh=hinhanh.mahinh where id_sp='$id_sp'";
    $objStatement = $objPDO->prepare($sql_pd);
    $objStatement->execute();
    $data1 = $objStatement->fetchAll(PDO::FETCH_OBJ);
    //var_dump($data1);exit;
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
  <h3>CD Store Quản lí - UPDATE PRODUCT</h3>
  <?php
    $sql = "SELECT * from loaisp";
    $objStatement = $objPDO->prepare($sql);
    $objStatement->execute();
    $data = $objStatement->fetchAll(PDO::FETCH_OBJ);
  ?>
    <ul class="list-group">
    <p><b>Update product information</b></p>
        <!--Form update-->
        <form action="process_edit.php" method="post" enctype="multipart/form-data">
            <li class="list-group-item">
            <?php
            foreach($data1 as $r)
            {
              ?>
              <input type="hidden" name="id_sp"value='<?php echo $r->id_sp ?>'>
              <input type="hidden" name="ma_ct"value='<?php echo $r->ma_chitiet ?>'>
              <input type="hidden" name="mahinh"value='<?php echo $r->mahinh ?>'>
                <h5>NAME PRODUCT</h5>
                <input type="text" class="form-control form-control-lg" placeholder="INPUT NAME" name="pd_name"value='<?php echo $r->tensp ?>'>
            </li>
            <li class="list-group-item">
                <h5>CATEGORY PRODUCT</h5>
                <select name="cat_id">
                <?php
                    foreach($data as $a)
                    {
                      $selected='';
                      if ($r->maloai== $a->maloai) 
                        $selected=' selected ';
                      ?>
                      <option value="<?php echo $a->maloai ?>" <?php echo $selected ?> ><?php echo $a->tenloai ?></option>
                      <?php
                    }
                ?>
                </select>
            </li>
            <li class="list-group-item">
                <h5>PRICE PRODUCT</h5>
                <input type="number" class="form-control form-control-lg"  name="pd_price" value='<?php echo $r->gia?>'min="1">
            </li>
            <li class="list-group-item">
                <h5>NSX</h5>
                <input type="text" class="form-control form-control-lg" placeholder="INPUT NSX" name="pd_nsx" value='<?php echo $r->nsx?>'>
            </li>
            <li class="list-group-item">
                <h5>Màu</h5>
                <input type="test" class="form-control form-control-lg" placeholder="INPUT MAU" name="pd_mau"value='<?php echo $r->mau?>'>
            </li>
            <li class="list-group-item">
                <h5>Số Lượng</h5>
                <input type="number" class="form-control form-control-lg" placeholder="INPUT SOLUONG" name="pd_sl"value='<?php echo $r->soluong?>' min = "1">
            </li>
            <li class="list-group-item">
                <h5>DESCRIPTION PRODUCT</h5>
                <textarea class="form-control" rows="5" id="comment" name="pd_desc"> <?php echo $r->mota ?></textarea>
            </li>
            <li class="list-group-item">
                <h5>IMGE PRODUCT</h5>
                <div class="img-edit-dt">
                  <img src="../../../images/<?php echo $r->hinhanh?>" alt="img">
                </div>
                <input type="file" name="pd_img" placeholder="Image">
            </li>
            <?php
          }
            ?>
            <button type="submit" value="Insert" class="btn btn-outline-dark btn-is">ENTER</button>
        </form>
    </ul>
   



<!--F O O T E R-->

</body>
</html>


