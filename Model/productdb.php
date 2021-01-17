<?php
require_once ('db.php');
function getAllData(){
    global $db ;
    $sql = "SELECT * FROM products";
    $result  = $db->query($sql);

    if($result != null){
        while ($row  = $result -> fetch())
        {
            echo $row['serial']."<br>";
            echo $row['name']."<br>";
            echo $row['description']."<br>";
            echo $row['price']."<br>";
            echo "<p><a href='cart/addcart.php?id=$row[serial]&name=$row[name]&name=$row[qty]=1'>Buy Product</a></p>";



        }
    }

}
?>
