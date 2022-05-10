<?php



include("../connection.php");
session_start();


     $admin_id =$_SESSION["id"];
    $product_name  = $_POST["product_name"];
    $real_price  = $_POST["real_price"];
    $seller_price  = $_POST["seller_price"];
    $offers  = $_POST["offers"];
    $quantity  = $_POST["quantity"];
    $product_content  = $_POST["product_content"];
    $Category_id  = $_POST["Category"];

    $date = date('Y-m-d');

    if(empty($offers))
    {
        $status = 0;
    }
    else
    {
        $status = 1;
    }

    $activate = 1;



        
    $avatarName = $_FILES['file']['name'];
    $avatarType = $_FILES['file']['type'];
    $avatarTmpName = $_FILES['file']['tmp_name'];
    $avatarize = $_FILES['file']['size'];

    $avatar1 = rand(0,10000000).'_' .$avatarName;

    move_uploaded_file($avatarTmpName,"upload\avatar\\".$avatar1);
    


    

    $sel = $con->prepare("SELECT * FROM `products` WHERE product_name  =:product_name ");

    $sel->bindParam("product_name",$product_name );

    $sel->execute();

    $c = $sel->rowCount();

    $fet = $sel->fetch();


    if($c === 1)
    {
        echo "the products already exist";
    }
    else
    {
        $ins = $con->prepare("INSERT INTO `products`(category_id,admin_id,`image`,product_name,`date`,price1,price2,quantity,`status`,discount,product_content,activate)  VALUE(:category_id,:admin_id,:image,:product_name,:date,:price1,:price2,:quantity,:status,:discount,:product_content,:activate)");

        $ins->bindParam("category_id",$Category_id);
        $ins->bindParam("admin_id",$admin_id);
        $ins->bindParam("product_name",$product_name);
        $ins->bindParam("date",$date);
        $ins->bindParam("price1",$real_price);
        $ins->bindParam("price2",$seller_price);
        $ins->bindParam("quantity",$quantity);
        $ins->bindParam("status",$status);
        $ins->bindParam("discount",$offers);
        $ins->bindParam("product_content",$product_content);
        $ins->bindParam("activate",$activate);
        $ins->bindParam("image",$avatar1);

  

        if($ins->execute())
        {
            echo " sucessfully sign in please log in  ";
        }
    }


?>