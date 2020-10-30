<!DOCTYPE html>
<html lang="en">

<link href="bootstrap/bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="bootstrap/bootstrap.bundle.js"></script>
<script src="bootstrap/bootstrap.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                <div><h3 class="text-center">Danh sách đơn hàng</h3></div>
                <table class="table">
                    <tr>
                        <th>Mã Đơn hàng</th>
                        <th>Phương thức thanh toán</th>
                        <th>Tổng tiền</th>
                        <th>Tên khách hàng</th>
                        <th>Địa chỉ</th>
                        <th>Số điện thoại</th>
                        <th>Ngày mua</th>
                        <th>Chi tiết đơn</th>
                        <th>Xóa</th>
                    </tr>
                    <?php while ($row = mysqli_fetch_assoc($listBill)){ ?>
                        <tr>
                            <td><?php echo $row['id_bill'];?></td>
                            <td><?php echo $row['payment_method'];?></td>
                            <td><?php echo $row['total'];?></td>
                            <td><?php echo $row['name'];?></td>
                            <td><?php echo $row['address'];?></td>
                            <td><?php echo $row['phone'];?></td>
                            <td><?php echo $row['created'];?></td>
                            <td>
                                <a class="text-success" href="?task=detail_order&id=<?php echo $row['id_bill'] ?>"><i class="glyphicon glyphicon-exclamation-sign"></i></a>
                            </td>
                            <td>
                                <a class="text-danger" href="?task=del_order&id=<?php echo $row['id_bill'] ?>"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
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