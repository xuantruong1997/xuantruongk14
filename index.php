<?php

require_once "Controllers/ControllerShoes.php";

session_start();

// controller
$ControllShoe = new ControllerShoes();
$task =isset($_GET['task'])? $_GET['task']:null;

//login

$name = isset($_POST['name'])? $_POST['name']:null;
$email = isset($_POST['email'])? $_POST['email']:null;
$phone = isset($_POST['phone'])? $_POST['phone']:null;
$address = isset($_POST['address'])? $_POST['address']:null;
$password = isset($_POST['password'])? $_POST['password']:null;
$repassword = isset($_POST['repassword'])? $_POST['repassword']:null;
$created = date("Y.m.d");

// product
$masp=isset($_POST['masp'])?$_POST['masp']:null;
$name_product = isset($_POST['name_product'])? $_POST['name_product']:null;
$dm_product = isset($_POST['dm_product'])? $_POST['dm_product']:null;
$hoatchat= isset($_POST['hoatchat'])? $_POST['hoatchat']:null;
$hamluong = isset($_POST['hamluong'])? $_POST['hamluong']:null;
$price = isset($_POST['price'])? $_POST['price']:null;
$quanity = isset($_POST['quanity'])? $_POST['quanity']:null;
$nha_phanphoi = isset($_POST['nha_phanphoi'])? $_POST['nha_phanphoi']:null;
$type = isset($_POST['type'])? $_POST['type']:null;
$size = isset($_POST['size'])? $_POST['size']:null;
$info_product = isset($_POST['info_product'])? $_POST['info_product']:null;


// thuong hieu
// $converse = isset($_POST['converse'])? $_POST['converse']:null;
// $adidas = isset($_POST['adidas'])? $_POST['adidas']:null;
// $balanciaga = isset($_POST['balanciaga'])? $_POST['balanciaga']:null;
// $puma = isset($_POST['puma'])? $_POST['puma']:null;
// $blance = isset($_POST['blance'])? $_POST['blance']:null;
// $vans = isset($_POST['vans'])? $_POST['vans']:null;
// $tim = isset($_POST['tim'])? $_POST['tim']:null;

// tìm kiếm
$key = isset($_POST['text_search'])? $_POST['text_search']:null;
// gio hang
if (empty($_SESSION['cart'])){
    $_SESSION['cart'] = [];
}

// dang nhap
if (isset($_POST['login'])){
    $ControllShoe->doLogin();
}
// dang ky
if (isset($_POST['register'])){
   
    if (empty($name) || empty($email) || empty($phone || empty($address)  || empty($password) || empty($repassword))){
        $message = "Không được để trống !";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }elseif ($password != $repassword){
        $message = "Mật khẩu không trùng nhau !";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }else{
    
        $ControllShoe->doRegister($name, $email, $phone, $address, $password, $created);
    }
}
// tim kiem san pham
if (isset($_POST['search'])){
    $ControllShoe->doSearch($key);
}
// them san pham
if (isset($_POST['add_product'])){
    $ControllShoe->addProduct($masp, $name_product, $dm_product, $hoatchat, $price, $quanity, $nha_phanphoi, $type, $info_product, $created );
}
// sủa sản phẩm
if (isset($_POST['update_product'])){
    $ControllShoe->doUpdateProduct();
}
// them vao gio hang
if (isset($_POST['btn-cart'])){
    $arr = [];
    $arr['id'] = $_POST['id'];
    //$arr['size'] = $_POST['size'];
    $arr['quantity'] = $_POST['quantity'];
    $ControllShoe->add_to_cart($arr);
}
// thanh toan
if (isset($_POST['payment'])){
    if (isset($_SESSION['username'])){
        header("location:index.php?task=payment");
    }else{
        header("location:index.php?task=pagelogin");
    }
}
// giao hàng
if (isset($_POST['ship'])){
    $ControllShoe->payment();
}
switch ($task){

    // giay
    case 'pagehome':
        $ControllShoe->getPageHome();
        break;
    case 'pagecontact':
        $ControllShoe->getPageContact();
        break;
    case 'pagenews':
        $ControllShoe->getPageNews();
        break;



        
    case 'thuc-pham-chuc-nang':
        $ControllShoe->getPageTPCN();
        break;
    // case 'da-lieu-dung-ngoai':
    //     $ControllShoe->getPageDLDN();
    //     break;
    case 'dong-duoc':
        $ControllShoe->getPageDD();
        break;
    case 'co-xuong-khop':
        $ControllShoe->getPageCXK();
        break;
    // case 'gan-mat':
    //     $ControllShoe->getPageGM();
    //     break;
    case 'giam-dau-ha-sot':
        $ControllShoe->getPageGDHS();
        break;
    // case 'giun-san-ki-sinh-trung':
    //     $ControllShoe->getPageGSKST();
    //     break;
    // case 'ho-hen':
    //     $ControllShoe->getPageHH();
    //     break;
    // case 'khang-di-ung':
    //     $ControllShoe->getPageKDU();
    //     break;
    case 'khang-sinh':
        $ControllShoe->getPageKS();
        break;
    
    case 'thuoc-tuan-hoan-nao-phoi':
        $ControllShoe->getPageTHN();
        break;
    case 'sot-ret':
        $ControllShoe->getPageSR();
        break;
    case 'cam-mau':
        $ControllShoe->getPageCM();
        break;
    case 'tieu-duong-gut':
        $ControllShoe->getPageTDG();
        break;
    case 'viem-loet-da-day-ta-trang':
        $ControllShoe->getPageDDTT();
        break;



    case 'toy-kid':
        $ControllShoe->getPageTK();
        break;
    case 'ghep-hinh-dong-vat':
        $ControllShoe->getPageGHDV();
        break;
    case 'thu-nhoi-bong-mem-dang-yeu':
        $ControllShoe->getPageTNBMDY();
        break;
    case 'luc-lac-do-choi-tri-tue':
        $ControllShoe->getPageLLDCTT();
        break;




    case 'pagetuyendung':
        $ControllShoe->getPageTuyendung();
        break;
    case 'pageintroduce':
        $ControllShoe->getPageIntroduce();
        break;
    case 'toy-kid':
        $ControllShoe->getPageToyKid();
        break;
    case 'pagelogin':
        $ControllShoe->getPageLogin();
        break;
    case 'pageregister':
        $ControllShoe->getPageRegister();
        break;
    case 'pageuser':
        $ControllShoe->getPageUser();
        break;
    case 'pageproduct':
        $ControllShoe->getPageProduct();
        break;
    case 'pagebill':
        $ControllShoe->getPageBill();
        break;
    case 'deleteuser':
        $ControllShoe->deleteUser();
        break;
    case 'editproduct':
        $ControllShoe->getPageEditProduct();
        break;
    case 'deleteproduct':
        $ControllShoe->delProduct();
        break;
    case 'detail':
        $ControllShoe->getDetailPage($_GET['id']);
        break;
    case 'cart':
        $ControllShoe->getPageCart();
        break;
    case 'del_cart':
        $ControllShoe->remove_from_cart($_GET['id']);
        break;
    case 'detail_order':
        $ControllShoe->getPageDetailOder();
        break;
    case 'del_order':
            $ControllShoe->remove_from_order($_GET['id']);
            break;
    case 'payment':
        $ControllShoe->getPagePayment();
        break;
    case 'logout':
        session_destroy();
        header("location:index.php?task=pagehome");
        break;

    // tìm kiếm
    default:
        $ControllShoe->getPageHome();
        break;
}
