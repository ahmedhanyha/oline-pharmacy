<?php

session_start();

include("../connection.php");


if(isset($_SESSION["user_id"]))
{
    $add_to_cart_id = $_POST["add_to_cart_id"];

    $carts = $con->prepare("SELECT * FROM products WHERE id=:id");

   $carts->bindparam("id",$add_to_cart_id);

    $carts->execute();

    $c = $carts->rowCount();

    if($c == 1)
    {
        $cart = $carts->fetch();
        $id = $cart["id"];
        $product_name = $cart["product_name"];
        $price1 = $cart["price1"];
        $price2 = $cart["price2"];
        $quantity = 1;

        $total_price =    ( $cart["price2"] -  ( $cart["price2"] *  $cart["discount"] ) / 100 ) *$quantity ;

     


        $image = $cart["image"];
        $status = $cart["status"];
        $discountc = $cart["discount"];
        $category_id  = $cart["category_id"];
        $date = date('Y-m-d');
   

        
        $ins = $con->prepare("INSERT INTO `cart`(product_name,`price1`,price2,`image`,discountc,status,category_id,product_id,user_id,`date`,quantity,total_price)  VALUE(:product_name,:price1,:price2,:image,:discountc,:status,:category_id,:product_id,:user_id1,:date,:quantity,:total_price)");

        $ins->bindParam("product_name",$product_name);
        $ins->bindParam("price1",$price1);
        $ins->bindParam("price2",$price2);
        $ins->bindParam("image",$image);

        $ins->bindParam("discountc",$discountc);
        $ins->bindParam("status",$status);
        $ins->bindParam("category_id",$category_id);
        $ins->bindParam("product_id",$id);
        $ins->bindParam("date",$date);
        $ins->bindParam("total_price",$total_price);
        
        $ins->bindParam("quantity",$quantity);
        $ins->bindParam("user_id1",$_SESSION["user_id"]);

        if($ins->execute())
        {
            echo "the data added to cart";
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