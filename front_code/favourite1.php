<?php
session_start();
include("../connection.php");

$id = $_SESSION["user_id"];



$sel=$con->prepare("SELECT * FROM `favourite` WHERE `user_id`=:user_id1");
$sel->bindparam('user_id1',$id);

$sel->execute();

$fets = $sel->fetchAll();



foreach($fets as $fet)
{
    ?>

<div class="product_item list_view col-12">
                                                    <div class="item_content product_content">
                                                            <div class="item_img">
                                                                <a href="product.html" ><img src="../admin/php_code/upload/avatar/<?php echo $fet["image"] ?>" alt=""></a>
                                                            </div>
                                                                <div class="product_details">
                                                                    <p><a href="shop.html" class="item_cat">shop</a></p>
                                                                    <a href="product.html" class="item_name text_blue_hover"><?php echo $fet["product_name"] ?></a>
                                                                    <p class="item_desc"><?php echo $fet["product_name"] ?>.</p>
                                                                    <div class="item_rate">
                                                                        <i class="far fa-star active"></i>
                                                                        <i class="far fa-star active"></i>
                                                                        <i class="far fa-star active"></i>
                                                                        <i class="far fa-star active"></i>
                                                                        <i class="far fa-star"></i>
                                                                    </div><!-- ./item_rate -->
                                                                    <div class="position-relative">
        
                                                                        <div class="item_price">
                                                                            
                                                                        <?php
                                                                            if($fet["status"] == 1)
                                                                            {

                                                                                ?>   <span class="new_price"> $<?php echo $fet["price2"] -  ( $fet["price2"] *  $fet["discountc"]  / 100 )  ?> </span><span class="old_price">$<?php echo $fet["price2"] ?> </span> <?php  
                                                                            }
                                                                            else
                                                                            {
                                                                                ?>   <span class="new_price"> $<?php echo $fet["price2"] ?> </span> <?php  
                                                                            }
                                                                        ?>
                                                                        
                                                                        
                                                                        
                                                                       
                                                                    </div>
                                                                        <button class="delete option bg_blue_text_whi_hover first" onclick="add_cart(<?php echo $fet['id'] ?>)" title="Add to cart"><i class="fas fa-shopping-cart"></i></button>
                                                                        <div class="item_options">
                                                                            <button class="add_to_fav option bg_blue_text_whi_hover" title="Add to wishlist" onclick="remove(<?php echo $fet['id'] ?>)"><i class="far fa-trash-alt"></i></button>
                                                                            <button class="add_to_compare option bg_blue_text_whi_hover" title="Add to compare"><i class="far fa-clone"></i></button>
                                                                        </div><!-- ./item_options -->
                                                                    </div>
                                                                </div><!-- ./product_details -->
                                                    </div><!-- ./item_content -->
                                                </div><!-- ./product_item -->

    <?php
}



?>

