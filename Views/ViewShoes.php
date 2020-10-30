<?php

class ViewShoes
{
    public function getPageHome($result, $arr){
        include_once "Templates/Home.php";
    }
    public function getPageContact(){
        include_once "Templates/contact.php";
    }
    public function getPageNews(){
        include_once "Templates/news.php";
    }
    public function getPageTuyendung(){
        include_once "Templates/pagetuyendung.php";
    }
    public function getPageLogin(){
        include_once "Templates/FormLogin.php";
    }
    public function getPageRegister(){
        include_once "Templates/FormRegister.php";
    }
    public function getPageIntroduce(){
        include_once "Templates/pageIntroduce.php";
    }
    public function getViewByDM($result,$title){
        include_once "Templates/viewByDM.php";
    }
    public function getPageSearch($result){
        include_once "Templates/formTimKiem.php";
    }
    // quản lý user
    public function getPageUser($listUser){
        include_once "Templates/pageUser.php";
    }
    // quản lý sản phẩm
    public function getPageProduct($listProduct,$dm,$npp,$type){
        include_once "Templates/pageProduct.php";
    }
    // quản lý hóa đơn
    public function getPageBill($listBill){
        include_once "Templates/bill.php";
    }
    public function getPageDetailOrder($result){
        include_once "Templates/pageDetailOder.php";
    }
    public function getPageEditProduct($result,$dm,$npp,$type){
        include_once "Templates/FormEditProduct.php";
    }
    public function getPageDetail($data){
        include_once "Templates/detail_product.php";
    }
    public function getPageCart($data){
        include_once "Templates/cart.php";
    }
    public function getPagePayment(){
        include_once "Templates/payment.php";
    }
}