<?php
include("../connection.php");


$product_id = $_POST["product_id"];


$up = $con->prepare("UPDATE `products` SET `activate` = '0' WHERE `products`.`id` = $product_id");

$up->execute();

?>