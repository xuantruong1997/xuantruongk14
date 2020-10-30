<!DOCTYPE html>
<html lang="en">

<link href="bootstrap/bootstrap.css" rel="stylesheet">
<script src="bootstrap/bootstrap.bundle.js"></script>
<script src="bootstrap/bootstrap.js"></script>
<link rel="stylesheet" href="Css/css.css">
<link rel="stylesheet" href="fontawesome/css/all.css">
<link rel="stylesheet" href="slick/slick-1.8.1/slick/slick.css">
<link rel="stylesheet" href="slick/slick-1.8.1/slick/slick-theme.css">
<head>
    <?php include_once "Templates/Partials/Head.php";?>
</head>
<body>
<nav>
    <?php include_once "Templates/Partials/Header.php";?>
</nav>
<div class="bg-light">
    <div class="container">
        <form method="POST" action="" enctype="multipart/form-data">
            <h4 class="rounded" style="border-bottom: solid 3px #F18620; color: #E8E8E8;">
                <div class="mt-2 p-1 bg-main rounded" style="width: 325px;">SỬA THÔNG TIN SẢN PHẨM</div>
            </h4>
            <div class="form-group">
             <input class="form-control" type="hidden" name="id_product" value="<?php echo $result['id_product']?>" >
                            <label for="">Mã sản phẩm</label>
                            <input class="form-control" type="text" name="masp" value="<?php echo $result['masp']?>" placeholder="Mã sản phẩm">
                            </div>

                            <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input class="form-control" type="text" value="<?php echo $result['name_product']?>" name="name_product" placeholder="Tên sản phẩm">
                            </div>

                            <div class="form-group">
                                <label for="">Danh mục sản phẩm</label>
                                    <select class="form-control" name="dm_product" id="">
                                      <?php while($row = mysqli_fetch_assoc($dm)) { ?>
                                          <option <?php if($row['id_danhmuc']==$result["id_danhmuc"]) echo "selected";?> value="<?php echo $row['id_danhmuc']?>"><?php echo $row['ten_dm']?></option>
                                       <?php } ?>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="">Hoạt chất và hàm lượng</label>
                                <input class="form-control" type="text" value="<?php echo $result['hoatchat']?>" name="hoatchat" placeholder="Hoạt chất">
                            </div>

                            

                            <div class="form-group">
                                <label for="">Giá sản phẩm</label>
                                <input class="form-control" type="number" value="<?php echo $result['price']?>" name="price" placeholder="Giá sản phẩm">
                            </div>

                            <div class="form-group">
                                <label for="">Số lượng</label>
                                <input class="form-control" type="number" value="<?php echo $result['quanity']?>" name="quanity" pla    ceholder="Số lượng">
                            </div>

                            <div class="form-group">
                                <label for="">Nhà phân phối</label>
                                    <select class="form-control" name="nha_phanphoi" id="">
                                      <?php while($row = mysqli_fetch_assoc($npp)) { ?>
                                          <option  <?php if($row['id_nhaphanphoi']==$result["id_nhaphanphoi"]) echo "selected";?> value="<?php echo $row['id_nhaphanphoi']?>"><?php echo $row['ten_nhaphanphoi']?></option>
                                       <?php } ?>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="">Quy cách đóng gói</label>
                                    <select class="form-control" name="type" id="">
                                      <?php while($row = mysqli_fetch_assoc($type)) { ?>
                                          <option  <?php if($row['id_type']==$result["id_type"]) echo "selected";?> value="<?php echo $row['id_type']?>"><?php echo $row['name_type']?></option>
                                       <?php } ?>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="">Ảnh</label>
                                <input type="file" value="kad" src="Image/product/<?php echo $result['id_product']?>/<?php echo $result['image']?>" name="imagefile"  id="imagefile">
                                <img src="Image/product/<?php echo $result['id_product']?>/<?php echo $result['image']?>" width="50" height="50" alt=""> 
                            </div>

                            <div class="form-group">
                                <label for="">Thông tin sản phẩm</label>
                                <input class="form-control" type="text" value="<?php echo $result['info_product']?>" name="info_product" placeholder="Thông tin sản phẩm">
                            </div>
                            <br>
                        
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name = "update_product" value="Cập nhật sản phẩm">
            </div>
        </form>
    </div>
</div>
<footer>
    <?php include_once "Templates/Partials/Footer.php";?>
</footer>
</body>

</html>