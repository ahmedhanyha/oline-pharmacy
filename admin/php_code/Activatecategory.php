<?php
include("../connection.php");


$category_id = $_POST["category_id"];


$up = $con->prepare("UPDATE `category` SET `activate` = '1' WHERE `category`.`id` = $category_id");

$up->execute();

?>