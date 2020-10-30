<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once "Templates/Partials/Head.php";?>
</head>
<body>
<nav>
    <?php include_once "Templates/Partials/Header.php";?>
</nav>
<div class="bg-light">
    <?php foreach ($data as $product) { ?>
    <div class="container">
        <div class="row mx-auto mt-2 mb-2">
            <div class="col-2">
                <img width="300px" height="300px" src="<?php echo $product['image']?>" alt="">
            </div>
            <div class="col-10">
                <form action="" method="post">
                <table class="mb-4  ">
                    <tr style="height:50px;">
                        <td class="w-25"><label for="">Tên sản phẩm</label></td>
                        <td><?php echo $product['name_product']?></td>
                    </tr>
                    <tr  style="height:50px;">
                        <td class="p-1"><label for="">Danh Mục</label></td>
                        <td><?php echo $product['ten_dm']?></td>
                    </tr>
                    <tr  style="height:50px;">
                        <td class="p-1"><label for="">Hoạt Chất</label></td>
                        <td><?php echo $product['hoatchat']?></td>
                    </tr>
                    <tr  style="height:50px;">
                        <td class="p-1"><label for="">Giá tiền</label></td>
                        <td><?php echo $product['price']?> VND</td>
                    </tr>
                    
                    <tr  style="height:50px;">
                        <td class="p-1"><label for="">Nhà Phân Phối</label></td>
                        <td><?php echo $product['ten_nhaphanphoi']?></td>
                    </tr>
                    <tr  style="height:50px;">
                        <td class="p-1"><label for="">Cách đóng gói</label></td>
                        <td><?php echo $product['name_type']?></td>
                    </tr>
                    <tr  style="height:50px;">
                        <td class="p-1" style="vertical-align: top;">
                            <label for="">Thông tin</label>
                            
                        </td>
                        <td>
                            <?php echo $product['info_product']?>
                        </td>
                        
                    </tr>
                </table>
                <div>
                    <input type="hidden" value="<?php echo $product['id_product'] ?>" name="id">
                        
                   
                    <div style="margin-bottom: 10px;"><span ><strong> Kho còn lại :</strong><?php echo $product['quanity']?></span></div>
                    
                    <input  id="quantity" type="text" value="" name="quantity">
                            <input class="btn btn-danger" type="submit" name="btn-cart" value="THÊM VÀO GIỎ HÀNG">
                        </div>
                </form>
            </div>
        </div>
    </div>
    <?php } ?>
</div>
<footer>
    <?php include_once "Templates/Partials/Footer.php";?>
</footer>
<?php include_once "Templates/link.php";?>
<script>
    $("input[name='quantity']").TouchSpin({
        initval: 1,
        min: 1,
        max: <?php echo $product['quanity']?>
    });
</script>
</body>

</html>