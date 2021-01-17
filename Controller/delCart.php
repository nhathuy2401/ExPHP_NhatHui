<?php
require_once './Model/cartdb.php';
session_start();
//delCart();
unset($_SESSION['cart']);
header("Location : ../index.php");
exit();