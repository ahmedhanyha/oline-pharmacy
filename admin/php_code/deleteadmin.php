<?php
    include("../connection.php");

    $admin_id =$_POST["admin_id"];



    $del = $con->prepare("DELETE FROM `registrations` WHERE id =:id  ");

    $del->bindParam("id",$admin_id);

    if($del->execute())
    {
        echo '<div class="alert alert-danger" role="alert">
        the data has been deleted
      </div>';
    }
?>