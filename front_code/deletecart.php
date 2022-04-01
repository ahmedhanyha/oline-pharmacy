<?php
    include("../connection.php");

    $cart_id =$_POST["cart_id"];



    $del = $con->prepare("DELETE FROM `cart` WHERE id =:id");

    $del->bindParam("id",$cart_id);

    if($del->execute())
    {
        echo '<div class="alert alert-danger" role="alert">
        the data has been deleted
      </div>';
    }
?>