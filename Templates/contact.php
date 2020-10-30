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
<div class="bg-light mb-5">
    <div class="container" style="height: 100%; min-height: 400px;">
        <h3 class="rounded" style="border-bottom: solid 3px #365899; color: #E8E8E8;"><div class="mt-2 p-1 bg-main rounded" style="width: 120px ;background: #365899">LIÊN HỆ</div></h3>
        <center><label for=""><h3>Chất lượng - Dịch vụ luôn được HT Pharma đặt lên hàng đầu</h3></label></center><br>
        <h2>Thông tin liên hệ</h2>
        <label>Công ty dược phẩm HT Pharma</label><br><br>
        <label for="">Địa chỉ: </label> Tổ 5, Phường Quang Vinh, Thành phố Thái Nguyên, Tỉnh Thái Nguyên, Việt Nam<br>
        <label for="">Thời gian phục vụ: </label>Từ 8h-22h(Cả tuần) <br>
        <label for="">Hotline: </label>0986.977.822 <br>
        <label for="">Email: </label>htpharma.tn@gmail.com <br>
        <p>
            - Giao hàng toàn quốc - Thu tiền tại nhà(COD) <br>
            - Đổi trả trong vòng 7 ngày
        </p>

    </div>
</div>
<?php include_once "Templates/link.php";?>
<footer>
    <?php include_once "Templates/Partials/Footer.php";?>
</footer>
<script>
    $("input[name='quantity']").TouchSpin({
        initval: 1,
        min: 1,
        max: 20
    });
</script>
</body>

</html>