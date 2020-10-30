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
        <h3 class="rounded" style="border-bottom: solid 3px #365899; color: #E8E8E8;"><div class="mt-2 p-1 bg-main rounded" style="width: 160px; background: #365899;">GIỚI THIỆU</div></h3>
        <section class="section features">
            <div class="container">
                <article class="row item">
                    <div class="col-sm col-lg-4 align">
                        <div class="item-content">
                            <div class="section-subtitle">Nổi bật</div>
                            
                        </div>
                    </div>
                    
                </article>
            </div>
        </section>
        <div class="mb-5 ">
            <label for="">  </label>
            <p>
                Một số thông tin cơ bản về HT Pharma<br><br>
                Tên tiếng Việt: CÔNG TY CỔ PHẦN THƯƠNG MẠI HT PHARMA<br><br>
                Tên tiếng Anh: HT PHARMA TRADING JOINT STOCK COMPANY<br><br>
                Tên viết tắt: HT PHARMA<br><br>
                Trụ sở chính:  Tổ 5, Phường Quang Vinh, Thành phố Thái Nguyên, Tỉnh Thái Nguyên, Việt Nam.<br><br>
                Văn phòng Thái Nguyên:  <br><br>
                Tổng đài MIỄN CƯỚC: / Hotline: 0986977822 <br><br>
                Website: www.htpharma.vn / Email: htpharma.tn@gmail.com<br><br>
            </p>
            <!-- <div ><img style="width:1000px;" src="Image/CSKH.jpg" alt=""></div> -->

        </div>
        <div class="mb-5">
            <label for=""></label>

            <!-- <div ><img style="width:1000px;" src="Image/xacnhatdocquyen.jpg" alt=""></div> -->
        </div>
        
        <div class="mb-5">
            <label for=""></label>

            <div ><img style="width:1000px;" src="Image/intro/dangkiDN.jpg" alt=""></div>
        </div>
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