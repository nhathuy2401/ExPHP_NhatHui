<?php
function addCart(){
    if(!isset($_SESSION['cart']))
        $_SESSION['cart'] = array();
        $id  = $_GET['id'];
        $name = $_GET['name'];
        $qty = $_GET['qty']
        if(!isset($_SESSION['cart'][$id])){
            $_SESSION['cart'][$id][qty]=$_SESSION['cart'][$id][qty] + 1 ;

            }
        else {
            $_SESSION['cart'][$id] = $id    ;
            $_SESSION['cart'][$id][qty] = 1 ;



        }
    }
    function printCart(){
        echo "<pre>";
        print_r($_SESSION['cart']);
        echo "</pre>";
    }
    function delCart(){
        $cart = $_SESSION['cart'];
        $id = $_GET['id'];
        if($id==0){
            unset($_SESSION['cart']);
        }
        else {
            unset($_SESSION['cart'][$id]);
        }

}
