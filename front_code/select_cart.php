<?php

session_start();

include("../connection.php");




$sel = $con->prepare("SELECT * FROM cart WHERE user_id=:user_id1");
$sel->bindparam("user_id1",$_SESSION["user_id"]);
$sel->execute();
$carts = $sel->fetchAll();

foreach($carts as $cart)
{
    ?>

<div class="con">
                        <div class="shopping_card_content">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="row">
                                        <div class="col-lg-2">
                                            <div class="img">
                                                <img src="../admin/php_code/upload/avatar/<?php echo $cart["image"] ?>" alt="">
                                            </div>
                                        </div>
                                        <diiv class="col-lg-10">
                                            <ul class="list-unstyled">
                                                <li> <a href="#"> 	<?php echo $cart["product_name"] ?> </a> </li>
    
                                           
                                                <li> <span class="brand"> category </span>:  <span class="spanproduct"> <?php echo $cart["category_id"] ?> </span> </li>
                                            </ul>
                                        </diiv>
                                    </div>
    
                                </div>
                                <div class="col-lg-1">
                                    <p>
                                        $
                                        <?php
                                            if($cart["status"] == 1)
                                            {
                                                echo $cart["price2"] -  ( $cart["price2"] *  $cart["discountc"] ) / 100 ;
                                            }   
                                            else
                                            {
                                                echo $cart["price2"];
                                            }
                                        ?> 
                                        
                                    </p>
                                </div>
                                <div class="col-lg-1">
                                    <input type="text" class="form-control" id="quantity"  value="<?php echo $cart["quantity"] ?>">
                                </div>
                                <div class="col-lg-1">
                                    <p>
                                        $
                                        <?php
                                                if($cart["status"] == 1)
                                                {
                                                    echo ($cart["price2"] -  ( $cart["price2"] *  $cart["discountc"] ) / 100 ) * $cart["quantity"] ;
                                                }   
                                                else
                                                {
                                                    echo $cart["price2"] * $cart["quantity"];
                                                }
                                        ?> 
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="shopping_card_footer">
                            <ul class="list-unstyled">
                                <li> <button type="button" class="btn btn-light"  data-bs-toggle="modal" data-bs-target="#exampleModal"> Edit </button> </li>
                                <li> <button type="button" class="btn btn-light" onclick="remove(<?php echo $cart['id'] ?>)"> Remove Item </button> </li>
                            </ul>
                        </div>
                    </div>

    <?php
}


?>