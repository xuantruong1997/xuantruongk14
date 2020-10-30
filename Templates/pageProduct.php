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
    <div class="ml-5">
        <div class="row mt-3" style="min-height: 300px;">
            <div class="col-lg-2">
                <h1>Quản lý</h1>
                <div class="list-group">
                    <a class="list-group-item" href="index.php?task=pageuser">Quản lý thành viên</a>
                    <a class="list-group-item" href="index.php?task=pageproduct">Quản lý sản phẩm</a>
                    <a class="list-group-item" href="index.php?task=pagebill">Quản lý đơn hàng</a>
                </div>
            </div>
            <div class="col-lg-10">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#listproduct">Danh sách sản phẩm</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#addproduct">Thêm sản phẩm</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="listproduct" class=" tab-pane active">
                        <h3 class="text-center">Danh sách sản phẩm</h3><!--Danh sach san pham-->
                        <div class="text-center">
                            <table class="table text-center w-100">
                                <tr>
                                    <th>ID</th>  <!--lam tiep-->
                                    <th>Tên mã sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Danh mục</th>
                                    <th>Hoạt chất và Hàm lượng</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Nhà phân phối</th>
                                    <th>Quy cách đóng gói</th>
                                    <th>Hình ảnh</th>
                                    <th>Thông tin sản phẩm</th>
                                    <th>Sửa</th>
                                    <th>Xóa</th>
                                </tr>
                                <?php foreach($listProduct as $row){ ?>
                                    <td><?php echo $row['id_product']?></td>
                                    <td><?php echo $row['masp']?></td>
                                    <td><?php echo $row['name_product']?></td>
                                    <td><?php echo $row['ten_dm']?></td>
                                    <td><?php echo $row['hoatchat'] ?></td>
                                    
                                    <td><?php echo $row['price'] ?></td>
                                    <td><?php echo $row['quanity']?></td>
                                    <td><?php echo $row['ten_nhaphanphoi']?></td>
                                    <td><?php echo $row['name_type']?></td>
                                    <td><img width="90px" height="90px" src="Image/product/<?php echo$row['id_product']?>/<?php echo$row['image']?>" alt=""></td>
                                    <td><span style=" display: block;
                                                        width: 130px;
                                                        overflow: hidden;
                                                        white-space: nowrap;
                                                        text-overflow: ellipsis;"><?php echo $row['info_product'] ?></span></td>
                                    <td><a class="text-success" href="index.php?task=editproduct&id=<?php echo $row['id_product']; ?>"><i class="far fa-edit"></i></a></td>
                                    <td><a class="text-danger" href="index.php?task=deleteproduct&id=<?php echo $row['id_product'];?>"><i class="far fa-trash-alt"></i></a></td>
                                    </tr>
                                <?php }; ?>
                            </table>
                        </div>
                        <!--code database-->
                    </div>
                    <div id="addproduct" class="container tab-pane fade"> <!--Thêm sản phẩm-->
                        <h3 class="text-center">Thêm sản phẩm</h3>
                        <form method="POST" action="" enctype="multipart/form-data" id="form-add-product">
                        <div class="form-group">
                                <label for="">Mã sản phẩm</label>
                                <input class="form-control" type="text" name="masp" placeholder="Mã sản phẩm">
                            </div>

                            <div class="form-group">
                                <label for="">Tên sản phẩm</label>
                                <input class="form-control" type="text" name="name_product" placeholder="Tên sản phẩm">
                            </div>

                            <div class="form-group">
                                <label for="">Danh mục sản phẩm</label>
                                    <select class="form-control" name="dm_product" id="">
                                      <?php while($row = mysqli_fetch_assoc($dm)) { ?>
                                          <option value="<?php echo $row['id_danhmuc']?>"><?php echo $row['ten_dm']?></option>
                                       <?php } ?>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="">Hoạt chất và hàm lượng</label>
                                <input  class="form-control" type="text" name="hoatchat" placeholder="Hoạt chất">
                                <!-- <textarea class="form-control" name="hoatchat" id="" cols="20" rows="5"></textarea> -->
                            </div>

                            <!-- <div class="form-group">
                                <label for="">Hàm lượng</label>
                                <input class="form-control" type="text" name="hamluong" placeholder="Hàm lượng">
                            </div> -->

                            <div class="form-group">
                                <label for="">Giá sản phẩm</label>
                                <input class="form-control" type="number" name="price" placeholder="Giá sản phẩm">
                            </div>

                            <div class="form-group">
                                <label for="">Số lượng</label>
                                <input class="form-control" type="number" name="quanity" placeholder="Số lượng">
                            </div>

                            <div class="form-group">
                                <label for="">Nhà phân phối</label>
                                    <select class="form-control" name="nha_phanphoi" id="">
                                      <?php while($row = mysqli_fetch_assoc($npp)) { ?>
                                          <option value="<?php echo $row['id_nhaphanphoi']?>"><?php echo $row['ten_nhaphanphoi']?></option>
                                       <?php } ?>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="">Quy cách đóng gói</label>
                                    <select class="form-control" name="type" id="">
                                      <?php while($row = mysqli_fetch_assoc($type)) { ?>
                                          <option value="<?php echo $row['id_type']?>"><?php echo $row['name_type']?></option>
                                       <?php } ?>
                                    </select>
                            </div>

                            <div class="form-group">
                                <label for="">Ảnh</label>
                                <input type="file" name="imagefile" id="imagefile">
                            </div>

                            <div>
                                <label for="">Thông tin sản phẩm</label>
                                <input class="form-control" style=" background: #fff00" type="text" name="info_product" placeholder="Thông tin sản phẩm">
                            </div>
                            <br>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary btn-add-product" name="add_product" value="Thêm sản phẩm"><br>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>
    <?php include_once "Templates/Partials/Footer.php";?>
</footer>
<script src="bootstrap/jquery-3.3.1.min.js"></script>
<script src="bootstrap/popper.min.js"></script>
<script src="bootstrap/bootstrap.min.js"></script>
</body>

</html>