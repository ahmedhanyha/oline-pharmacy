<?php
    include("../connection.php");

    $category_id =$_POST["category_id"];



    $del = $con->prepare("DELETE FROM `category` WHERE id =:id");

    $del->bindParam("id",$category_id);

    if($del->execute())
    {
        echo '<div class="alert alert-danger" role="alert">
        the data has been deleted
      </div>';
    }
?>