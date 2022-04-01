<?php

session_start();

include("../connection.php");


if(isset($_SESSION["user_id"]))
{
    $favourite_id = $_POST["favourite_id"];

    $favourites = $con->prepare("SELECT * FROM products WHERE id=:id");

   $favourites->bindparam("id",$favourite_id);

    $favourites->execute();

    $c = $favourites->rowCount();

    if($c == 1)
    {
        $favourit = $favourites->fetch();
        $id = $favourit["id"];
        $product_name = $favourit["product_name"];
        $price1 = $favourit["price1"];
        $price2 = $favourit["price2"];
        $image = $favourit["image"];
        $quantity = 1;
        $total_price = $quantity * $price2;
        $status = $favourit["status"];
        $discountc = $favourit["discount"];
        $category_id  = $favourit["category_id"];
        $user_id = 5;

        
        $ins = $con->prepare("INSERT INTO `favourite`(product_name,`price1`,price2,`image`,discountc,status,category_id,product_id,user_id)  VALUE(:product_name,:price1,:price2,:image,:discountc,:status,:category_id,:product_id,:user_id1)");

        $ins->bindParam("product_name",$product_name);
        $ins->bindParam("price1",$price1);
        $ins->bindParam("price2",$price2);
        $ins->bindParam("image",$image);

        $ins->bindParam("discountc",$discountc);
        $ins->bindParam("status",$status);
        $ins->bindParam("category_id",$category_id);
        $ins->bindParam("product_id",$id);
        $ins->bindParam("user_id1",$_SESSION["user_id"]);

        if($ins->execute())
        {
            echo "the data added to facourite";
        }

    }


}
else
{
    echo '<div class="alert alert-danger" role="alert">
    please login
  </div>';
}











?>