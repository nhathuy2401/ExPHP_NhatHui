<?php

require_once '../Model/cartdb.php';
session_start();
addCart();
printCart();
echo "<a href='./index.php'>Mua hang tiep</a><br>";
echo "<a href='../Controller/delCart.php?id=0'>Xoa gio hang</a><br>";

