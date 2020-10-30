<?php


class ModelShoes
{
    public function __construct()
    {
        $db = mysqli_connect("localhost", "root","","htpharma");
        mysqli_set_charset($db, "utf8");
        $this->db = $db;
    }
    // đăng nhập
    public function doLogin(){
        $query = "SELECT * 
                  FROM users 
                  WHERE email = '".$_POST['email']."' AND password = '".$_POST['password']."'";
        $result = mysqli_query($this->db, $query);
        if (mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            return $row;
        }
        return false;
    }
    // đăng kí
    public function doRegister($name, $email, $phone,$address, $password, $created){
        $query = "INSERT INTO users (name, email, phone,address, password, level, created)
                  VALUES ('".$name."','".$email."', '".$phone."', '".$address."', '".$password."', '1', '".$created."')";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    // lay du lieu trang chu
    public function getDataHome(){
        $query = "SELECT *
        FROM product,dm_product,nha_phanphoi,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
        AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi
                  LIMIT 1, 15";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    // lay du lieu trang giay nam
    public function getDataTD(){
        $query = "SELECT * 
                  FROM product, type
                  WHERE product.id_type = type.id_type
                  AND product.id_type = '1'";
        $result = mysqli_query($this->db, $query);
        return $result;
    }

    // lay du lieu giay theo thuong hieu

    // balanciaga
    public function getDataBalanciaga(){
        $query = "SELECT *
                  FROM product, trandmark, type
                  WHERE product.id_trandmark = trandmark.id_trandmark 
                  AND product.id_trandmark = '4'
                  AND product.id_type = type.id_type";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    // puma
    public function getDataPuma(){
        $query = "SELECT *
                  FROM product, trandmark, type
                  WHERE product.id_trandmark = trandmark.id_trandmark 
                  AND product.id_trandmark = '3'
                  AND product.id_type = type.id_type";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    //balance
    public function getDataTPCN(){
        $query = "SELECT *
        FROM product,dm_product,nha_phanphoi,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
        AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi AND product.id_danhmuc=1";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    // public function getDataDLDN(){
    //     $query = "SELECT *
    //     FROM product,dm_product,nha_phanphoi,type
    //     WHERE product.id_danhmuc = dm_product.id_danhmuc
    //     AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi AND product.id_danhmuc=2";
    //     $result = mysqli_query($this->db, $query);
    //     return $result;
    // }
    public function getDataDD(){
        $query = "SELECT *
        FROM product,dm_product,nha_phanphoi,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
        AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi AND product.id_danhmuc=2";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function getDataCXK(){
        $query = "SELECT *
        FROM product,dm_product,nha_phanphoi,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
        AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi AND product.id_danhmuc=3";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function getDataGDHS(){
        $query = "SELECT *
        FROM product,dm_product,nha_phanphoi,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
        AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi AND product.id_danhmuc=4";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function getDataKS(){
        $query = "SELECT *
        FROM product,dm_product,nha_phanphoi,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
        AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi AND product.id_danhmuc=5";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function getDataTHN(){
        $query = "SELECT *
        FROM product,dm_product,nha_phanphoi,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
        AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi AND product.id_danhmuc=6";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function getDataSR(){
        $query = "SELECT *
        FROM product,dm_product,nha_phanphoi,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
        AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi AND product.id_danhmuc=7";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function getDataCM(){
        $query = "SELECT *
        FROM product,dm_product,nha_phanphoi,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
        AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi AND product.id_danhmuc=8";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function getDataTDG(){
        $query = "SELECT *
        FROM product,dm_product,nha_phanphoi,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
        AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi AND product.id_danhmuc=9";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function getDataDDTT(){
        $query = "SELECT *
        FROM product,dm_product,nha_phanphoi,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
        AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi AND product.id_danhmuc=10";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    // them thanh vien
    public function addMember($name, $email, $phone, $password, $created){
        $query = "INSERT INTO users (name, email, phone, password, level, created)
                  VALUES ('".$name."','".$email."', '".$phone."', '".$password."', '1', '".$created."')";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    // Xóa thành viên
    public function deleteUser(){
        $query = "DELETE FROM users
                  WHERE id_user = '{$_GET['iduser']}'";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    // lay du lieu user
    public function getDataUser(){
        $query = "SELECT * 
                  FROM users
                  WHERE level = '1'";
        $listUser = mysqli_query($this->db, $query);
        return $listUser;
    }
    // lay du lieu san pham
    public function getDataProduct(){
        $query = "SELECT *
                  FROM product,dm_product,nha_phanphoi,type
                  WHERE product.id_danhmuc = dm_product.id_danhmuc
                  AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi  order by id_product";
        $listProduct = mysqli_query($this->db,$query);
        return $listProduct;
    }
    // lấy dữ liệu đơn hàng
    public function getDataBill(){
        $query = "SELECT *
                  FROM bill, users, detailorder, product
                  WHERE bill.id_user   = users.id_user
                  AND bill.id_bill = detailorder.id_bill
                  AND detailorder.id_product = product.id_product";
        $listBill = mysqli_query($this->db, $query);
        return $listBill;
    }
    // lấy dữ liệu trang sửa sản phẩm
    public function getPageEditProduct(){
        $query = "SELECT *
        FROM product,dm_product,nha_phanphoi,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
        AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi 
        AND id_product = '{$_GET['id']}'";
                
        $result = mysqli_query($this->db, $query);
        return $result->fetch_assoc();
    }
    // Sửa sản phẩm
    public function editProduct(){
        $image = $_FILES['imagefile']['name'];
        $query="";
        if($image==""){
            $query = "UPDATE product
            SET 
            masp = '{$_POST['masp']}',
            name_product = '{$_POST['name_product']}',
            id_danhmuc= '{$_POST['dm_product']}',
            hoatchat = '{$_POST['hoatchat']}',
            
            price = '{$_POST['price']}',
            quanity = '{$_POST['quanity']}',
            id_nhaphanphoi = '{$_POST['nha_phanphoi']}',
            id_type = '{$_POST['type']}'
            WHERE id_product = '{$_GET['id']}'";
        }else{
            $query = "UPDATE product
            SET 
            masp = '{$_POST['masp']}',
            name_product = '{$_POST['name_product']}',
            id_danhmuc= '{$_POST['dm_product']}',
            hoatchat = '{$_POST['hoatchat']}',
            price = '{$_POST['price']}',
            quanity = '{$_POST['quanity']}',
            id_nhaphanphoi = '{$_POST['nha_phanphoi']}',
            id_type = '{$_POST['type']}',
            image = '{$image}'
            WHERE id_product = '{$_GET['id']}'";
        }
       
        if (mysqli_query($this->db, $query)){
            $path = "Image/product/".$_GET['id']."/";
            if(!file_exists($path)){
                mkdir($path);
            }
            move_uploaded_file($_FILES['imagefile']['tmp_name'], $path.$image);
            $message = "Cập nhật thành công!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            
        }else{
            $message = "Cập nhật thất bại!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        }

    }
    // xóa sản phẩm
    public function delProductSize(){
        $query = "DELETE FROM product_size
                  WHERE product_size.id_product = '{$_GET['id']}'";
        if (mysqli_query($this->db, $query)){
            return mysqli_insert_id($this->db);
        };
        return false;
    }
    public function delProduct(){
        $id = $this->delProductSize();
        if (isset($id)){
            $query = "DELETE FROM product
                      WHERE id_product = '{$_GET['id']}'";
            $result = mysqli_query($this->db, $query);
            return $result;
            $message = "Xóa sản phẩm".$_GET['id']." thành công!";
            echo "<script type='text/javascript'>alert('$message');</script>";
        };
        return false;
    }

    // lấy size
    public function getNhaPhanPhoi(){
        $query = "SELECT *
                  FROM nha_phanphoi";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function getDanhMuc(){
        $query = "SELECT *
                  FROM dm_product";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    public function getType(){
        $query = "SELECT *
                  FROM type";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    // du lieu san pham de them
    public function dataProduct(){
        $query = "SELECT *
                  FROM product, trandmark, type
                  WHERE product.id_trandmark = trandmark.id_trandmark
                  AND product.id_type = type.id_type";
        $dataProduct = mysqli_fetch_assoc($this->db, $query);
        return $dataProduct;
    }
    // tìm kiếm sản phẩm
    public function doSearch(string $key){
        // $query = "SELECT DISTINCT * FROM dm_product, product, nha_phanphoi, type 
        // WHERE dm_product.ten_dm LIKE '%$key%' AND dm_product.id_danhmuc = product.id_danhmuc AND product.id_type = type.id_type
        // AND product.id_nhaphanphoi = nha_phanphoi.id_nhaphanphoi";
        $query = "SELECT DISTINCT *
        FROM product,dm_product,nha_phanphoi,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
            AND product.id_type = type.id_type 
            AND nha_phanphoi.id_nhaphanphoi = product.id_nhaphanphoi 
            AND (dm_product.ten_dm LIKE '%$key%' OR product.name_product LIKE '%$key%' OR nha_phanphoi.ten_nhaphanphoi LIKE '%$key%' OR type.name_type LIKE '%$key%' )";
        //echo $query;
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    // Thêm sản phẩm
    public function addProduct($masp, $name_product, $dm_product, $hoatchat, $price, $quanity, $nha_phanphoi, $type, $info_product, $created,$image){
        $query = "INSERT INTO product(masp, name_product, id_danhmuc, hoatchat, price, quanity, id_nhaphanphoi, id_type, image, info_product, created)
                  VALUES ('{$masp}','{$name_product}','{$dm_product}','{$hoatchat}','{$price}','{$quanity}','{$nha_phanphoi}','{$type}', '{$image}','{$info_product}', '{$created}')";
        mysqli_query($this->db, $query);
       
        return mysqli_insert_id($this->db);
    }
    // public function product_size($product_id)
    // {
    //     $query = "SELECT * FROM product_size, size
    //               WHERE id_product = {$product_id} 
    //               AND size_id = size.id";
    //     $result = mysqli_query($this->db, $query);
    //     $arr = [];
    //     while($row = mysqli_fetch_assoc($result)) {
    //         $temp = [];
    //         $temp['id']   = $row['id'];
    //         $temp['name'] = $row['name'];
    //         array_push($arr, $temp);
    //     }
    //     return $arr;
    // }
    public function addProductSize($size, $product_id){
        $query = "INSERT INTO product_size(size_id, id_product)
                  VALUES('{$size}', '{$product_id}')";
        $result = mysqli_query($this->db, $query);
        return $result;
    }
    // xem chi tiet sản phẩm
    public function detailProduct($product_id){
        $query = "SELECT *
        FROM product,dm_product,nha_phanphoi,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
        AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi
                  AND id_product = {$product_id}";
        $listProduct = mysqli_query($this->db,$query);

        return $listProduct;
    }
    // lấy chi tiết sản phẩm
    public function getProductDetails($product_id){
        $query = "SELECT *
        FROM product,dm_product,nha_phanphoi,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
        AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi
                  AND id_product = {$product_id}";
         
        $result = mysqli_query($this->db,$query);
        $arr = [];
        while($row = mysqli_fetch_assoc($result)){
            $temp = [];
            $temp['id'] = $row['id_product'];
            $temp['name'] = $row['name_product'];
            $temp['price'] = $row['price'];
            $temp['image'] = $row['image'];
            $temp['info_product'] = $row['info_product'];
            array_push($arr, $temp);
        }
        return $arr;
    }
    //phân trang
    public function phanTrang(){
        // tìm số bản ghi
        $result = mysqli_query($this->db, "SELECT count(id_product) as total FROM product");
        return $result;
    }
    // Thanh toán
    public function creatBill(){
        $created = date("Y.m.d");
        $query = "INSERT INTO bill(payment_method, id_user, total, created)
                  VALUES ('{$_POST['payment_method']}', '{$_SESSION['id_user']}', '{$_SESSION['total']}', '{$created}')";

        if (mysqli_query($this->db, $query)){
            return mysqli_insert_id($this->db);
        };
        return false;
    }
    public function creatDetailOrder(){
        $bill_id = $this->creatBill();
        for($i=0; $i < count($_SESSION['cart']); $i++) {
            $query = "INSERT INTO detailorder(id_product, id_bill, quanity_order, sub_total)
                      VALUES ('{$_SESSION['cart'][$i]['id']}','{$bill_id}','{$_SESSION['cart'][$i]['quantity']}','{$_SESSION['sub_total']}')";
           mysqli_query($this->db, $query);

        }
            $message = "Thanh toán thành công!";
            echo "<script type='text/javascript'>alert('$message');</script>";
            unset($_SESSION['cart']);
            header("refresh:0; url=index.php?task=pagehome");
       
    }

    public function getDataDetailOder($id_bill){
        $query = "SELECT *
        FROM product,dm_product,nha_phanphoi,detailorder,type
        WHERE product.id_danhmuc = dm_product.id_danhmuc
        AND product.id_type = type.id_type AND nha_phanphoi.id_nhaphanphoi=product.id_nhaphanphoi
    AND detailorder.id_product=product.id_product AND id_bill={$id_bill}";
         
        $result = mysqli_query($this->db,$query);

        return $result;
    }
    

    public function deleteorder($bill_id){
        $query="delete from detailorder where id_bill=".$bill_id;
        mysqli_query($this->db, $query);
     
        $query1="delete from bill where id_bill=".$bill_id;
        mysqli_query($this->db, $query1);
        
    }
    public function giamSL($info){
            $query="update product set quanity=quanity-{$info["quantity"]} where id_product={$info["id"]}";
            mysqli_query($this->db, $query);
    }
    public function tangSL($id,$sl){
        $query="update product set quanity=quanity+{$sl} where id_product={$id}";
        mysqli_query($this->db, $query);
}
   
}