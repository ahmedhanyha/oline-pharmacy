<?php
    include("../connection.php");

    $blog_id =$_POST["blog_id"];



    $del = $con->prepare("DELETE FROM `blogs` WHERE id =:id  ");

    $del->bindParam("id",$blog_id);

    if($del->execute())
    {
        echo '<div class="alert alert-danger" role="alert">
        the data has been deleted
      </div>';
    }
?>