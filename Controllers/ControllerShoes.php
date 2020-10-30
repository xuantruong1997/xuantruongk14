<?php

require_once "Models/ModelShoes.php";
require_once "Views/ViewShoes.php";

class ControllerShoes
{
    var $model, $view;
    public function __construct()
    {
        $this->view = new ViewShoes();
        $this->model = new ModelShoes();
    }
    // trang chu
    public function getPageHome(){
        $result = $this->model->phanTrang();
        $row = mysqli_fetch_assoc($result);
        $total_record = $row['total'];
        // tìm số lượng trang và số sản phẩm trên 1 trang
        $current_page = isset($_GET['page'])? $_GET['page']:1;
        $limit = 15;
        // tổng trang
        $total_page = ceil($total_record/$limit);
        //
        if ($current_page > $total_page){
            $current_page = $total_page;
        }else if ($current_page < 1){
            $current_page = 1;
        }
        //trang bắt đầu
        $start = ($current_page - 1) * $limit;
        $result = $this->model->getDataHome();
        $arr = [];
        $temp = [];
        $temp['current_page'] = $current_page;
        $temp['total_page'] = $total_page;
        array_push($arr, $temp);

        $this->view->getPageHome($result, $arr);
    }
    //Trang tin tức
    public function getPageNews(){
        $this->view->getPageNews();
    }
    // trang liên hệ
    public function getPageContact(){
        $this->view->getPageContact();
    }
    // san pham
    public function getPageTuyendung(){
        $result = $this->model->getDataTD();
        $this->view->getPageTuyenDung($result);
    }
    
    // gioithieu
    public function getPageIntroduce(){
        $this->view->getPageIntroduce();
    }



    
    //thucphamchucnang
    public function getPageTPCN(){
        $result = $this->model->getDataTPCN();
        $this->view->getViewByDM($result,"THỰC PHẨM CHỨC NĂNG");
    }
    //
    // public function getPageDLDN(){
    //     $result = $this->model->getDataDLDN();
    //     $this->view->getViewByDM($result,"DA LIỄU DÙNG NGOÀI");
    // }
    //
    public function getPageDD(){
        $result = $this->model->getDataDD();
        $this->view->getViewByDM($result, "ĐÔNG DƯỢC");
    }
    //
    public function getPageCXK(){
        $result = $this->model->getDataCXK();
        $this->view->getViewByDM($result,"CƠ XƯƠNG KHỚP");
    }
    //
    // public function ggetPageGM(){
    //     $result = $this->model->getDataGM();
    //     $this->view->getViewByDM($result,"GAN MẬT");
    // }
    //

    public function getPageGDHS(){
        $result = $this->model->getDataGDHS();
        $this->view->getViewByDM($result,"GIẢM ĐAU - HẠ SỐT");
    }
    //
    // public function getPageGSKST(){
    //     $result = $this->model->getDataGSKST();
    //     $this->view->getViewByDM($result);
    // }
    //
    // public function getPageHH(){
    //     $result = $this->model->getDataHH();
    //     $this->view->getViewByDM($result);
    // }
    //
    // public function getPageKDU(){
    //     $result = $this->model->getDataKDU();
    //     $this->view->getViewByDM($result);
    // }
    //
    public function getPageKS(){
        $result = $this->model->getDataKS();
        $this->view->getViewByDM($result,"NHÓM KHÁNG SINH");
    }
    public function getPageTHN(){
        $result = $this->model->getDataTHN();
        $this->view->getViewByDM($result,"THUỐC TUẦN HOÀN NÃO-TIM MẠCH-PHỔI");
    }
    //
    public function getPageSR(){
        $result = $this->model->getDataSR();
        $this->view->getViewByDM($result,"NHÓM THUỐC SỐT RÉT");
    }
    //
    public function getPageCM(){
        $result = $this->model->getDataCM();
        $this->view->getViewByDM($result,"THUỐC CẦM MÁU");
    }
    //
    public function getPageTDG(){
        $result = $this->model->getDataTDG();
        $this->view->getViewByDM($result,"NHÓM TIỂU ĐƯỜNG - GÚT");
    }
    //
    public function getPageDDTT(){
        $result = $this->model->getDataDDTT();
        $this->view->getViewByDM($result,"VIÊM LOÉT DẠ DÀY-TÁ TRÀNG");
    }



    //trang dang nhap
    public function getPageLogin(){
        $this->view->getPageLogin();
    }
    //trang dang ky
    public function getPageRegister(){
        $this->view->getPageRegister('');
    }
    //trang chi tiet
    public function getDetailPage($product_id)
    {
        $data = $this->model->detailProduct($product_id);
        $this->view->getPageDetail($data);
    }
    // trang quản lý user
    public function getPageUser(){
        $listUser = $this->model->getDataUser();
        $this->view->getPageUser($listUser);
    }
    // quản lý sản phẩm
    public function getPageProduct(){
        $listProduct = $this->model->getDataProduct();
        $dm=$this->model->getDanhMuc();
        $npp=$this->model->getNhaPhanPhoi();
        $type=$this->model->getType();
        $this->view->getPageProduct($listProduct,$dm,$npp,$type);
    }
    // lấy tranng quản lý đơn hàng
    public function getPageBill(){
        $listBill = $this->model->getDataBill();
        $this->view->getPageBill($listBill);
    }
    // Xóa thành viên
    public function deleteUser(){
        $this->model->deleteUser();
        header("location:index.php?task=pagemanager");
    }
    // dang nhap
    public function doLogin(){
        $result = $this->model->doLogin();
        $_SESSION['id_user'] = $result['id_user'];
        $_SESSION['username'] = $result['name'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['phone'] = $result['phone'];
        $_SESSION['address'] = $result['address'];
        echo $result['address'];
        $_SESSION['level'] = $result['level'];
        if ($result['level'] == 2){
            header("location:index.php?task=pageuser");
        }elseif ($result['level'] == 1){
            header("location:index.php?task=pagehome");
        }
    }
    // dang ky
    public function doRegister($name, $email, $phone,$address, $password, $created){
        $result =  $this->model->doRegister($name, $email, $phone,$address, $password, $created);
        $message = "Đăng ký thành công !";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $this->view->getPageRegister();
    }
    // Tìm kiếm
    public function doSearch($key){
        $result = $this->model->doSearch($key);
        $this->view->getPageSearch($result);
    }
    // Thêm sản phẩm
    public function addProduct($masp, $name_product, $dm_product, $hoatchat, $price, $quanity, $nha_phanphoi, $type, $info_product, $created){
        if (isset($_FILES['imagefile']['name'])){

            $image = $_FILES['imagefile']['name'];
            // them anh
  
            if (empty($masp) ||empty($name_product) || empty($dm_product) || empty($hoatchat) || empty($price) || empty($quanity) || empty($nha_phanphoi) || empty($type)|| empty($info_product)){
                die("bc");
                header("location:".$_SERVER['REQUEST_URI']."");

            }else {
               
                $insert_id = $this->model->addProduct($masp, $name_product, $dm_product, $hoatchat, $price, $quanity, $nha_phanphoi, $type, $info_product, $created,$image);
                $path = "Image/product/".$insert_id."/";
                if(!file_exists($path)){
                    mkdir($path);
                }
                move_uploaded_file($_FILES['imagefile']['tmp_name'], $path.$image);
               
        
            }
        }else{
            echo "<div class='container mt-4' style='width: 380px;'><div class='alert alert-success text-center'>Vui lòng chọn ảnh!</div></div>";
        }
    }
    // trang sửa sản phẩm
    public function getPageEditProduct(){
        $result = $this->model->getPageEditProduct();
        $dm=$this->model->getDanhMuc();
        $npp=$this->model->getNhaPhanPhoi();
        $type=$this->model->getType();
        $this->view->getPageEditProduct($result,$dm,$npp,$type);
    }
    public function doUpdateProduct(){
        $result = $this->model->editProduct();
        if ($result == true){
            header("location:index.php?task=pageproduct");
        }else{
            var_dump($result);
        }
    }
    // Xóa sản phẩm
    public function delProduct(){
        $result = $this->model->delProduct();
        if ($result == true){

            header("location:index.php?task=pageproduct");
        }else{
            var_dump($result);
        }
    }
    // gio hang
    function add_to_cart($info)
    {
        $this->model->giamSL($info);
        if (count($_SESSION['cart']) > 0) {

            $this->merge($info);
        } else {
            array_push($_SESSION['cart'], $info);
        }
        //header('Location: '.$_SERVER["REQUEST_URI"].'');
    }
    // Xóa khỏi giỏ hàng
    function remove_from_cart($product_id)
    {
        $ids = array_column($_SESSION['cart'], 'id');
        if(in_array($product_id, $ids)) {
            $key = array_search($product_id, $ids);
            $this->model->tangSL($product_id,$_SESSION['cart'][$key]['quantity']);
            if($key !== false) {
                unset($_SESSION['cart'][$key]);
                Sort($_SESSION['cart']);
                header('Location: '.$_SERVER["HTTP_REFERER"].'');
            }
        }
    }

    public function getPageDetailOder(){
       
         $result = $this->model->getDataDetailOder($_GET["id"]);
        $this->view->getPageDetailOrder($result);


    }
    function remove_from_order($bill_id)
    {
       $delete=$this->model->deleteorder($bill_id);
       header('Location: '.$_SERVER["HTTP_REFERER"].'');
    }
    // Tăng số lượng sản phẩm nếu sản phẩm bị trùng
    function merge($new_added)
    {

        $ids = array_column($_SESSION['cart'], 'id');
        if(in_array($new_added['id'], $ids)) {
            for($i = 0; $i < count($_SESSION['cart']); $i++) {
                if($_SESSION['cart'][$i]['id'] == $new_added['id']) {
                    $total_quantity = $_SESSION['cart'][$i]['quantity'] + $new_added['quantity'];
                    if($total_quantity < 11) {
                        $_SESSION['cart'][$i]['quantity'] = $total_quantity;
                    } else {
                        $_SESSION['cart'][$i]['quantity'] = 10;
                    }
                }
            }
        } else {
            array_push($_SESSION['cart'], $new_added);
        }
    }
    // lấy dữ liệu giỏ hàng
    public function getPageCart(){
        $product_info = [];
        for ($i=0; $i < count($_SESSION['cart']); $i++) {
            $data['quantity'] = $_SESSION['cart'][$i]['quantity'];
            $data['product_info'] = $this->model->getProductDetails($_SESSION['cart'][$i]['id']);
            array_push($product_info, $data);
        }
        $data = $product_info;
        $this->view->getPageCart($data);
    }
    public function getPagePayment(){
        
        $this->view->getPagePayment();
    }
    public function payment(){
        $this->model->creatDetailOrder();
    }
}