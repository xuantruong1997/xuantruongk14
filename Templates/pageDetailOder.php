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
                <div><h3 class="text-center">Chi tiết đơn hàng</h3></div>
                <table class="table">
                    <tr>
                        <th>STT</th>
                        <th>Hình ảnh</th>
                        <th>Tên mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                    </tr>
                    <?php
                    $i= 1;
                    
                  while($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                                <td>
                                    <?php echo $i;$i++ ?>
                                </td>
                                <td>
                                    <img width="200px" height="200px" src="Image/product/<?php echo $row["id_product"]; ?>/<?php echo $row['image']; ?>" alt="">
                                </td>
                                <td>
                                <?php echo $row["masp"]; ?>
                                   
                                </td>
                                <td>
                                <?php echo $row["name_product"]; ?>
                                   
                                </td>
                                <td>
                                <?php echo $row["quanity_order"]; ?>
                                </td>
                                <td>
                                <?php echo $row["price"]*$row["quanity_order"]; ?>
                                </td>
                          
                        </tr>
                    <?php
                        // $total += $item['price'] * $data[$i]['quantity'];
                    
                       
                    } ?>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
<footer>
    <?php include_once "Templates/Partials/Footer.php";?>
</footer>
</body>

</html>