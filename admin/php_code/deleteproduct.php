<?php
    include("../connection.php");

    $product_id =$_POST["product_id"];



    $del = $con->prepare("DELETE FROM `products` WHERE id =:id");

    $del->bindParam("id",$product_id);

    if($del->execute())
    {
        echo '<div class="alert alert-danger" role="alert">
        the data has been deleted
      </div>';
    }
?>