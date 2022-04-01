<?php
    include("../connection.php");

    $fav_id =$_POST["fav_id"];



    $del = $con->prepare("DELETE FROM `favourite` WHERE id =:id");

    $del->bindParam("id",$fav_id);

    if($del->execute())
    {
        echo '<div class="alert alert-danger" role="alert">
        the data has been deleted
      </div>';
    }
?>