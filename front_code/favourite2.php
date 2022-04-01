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
                             <div class="product_item col-xl-4 col-sm-6 col-12">
                                                    <div class="item_content product_content">
                                                        <a href="product.html" class="item_img"><img src="assets/image/shop/products/product_6.jpg" alt=""></a>
                                                        <p><a href="shop.html" class="item_cat">shop</a></p>
                                                        <a href="product.html" class="item_name text_blue_hover">Chicco Key Fit Infant Orion</a>
                                                        <div class="item_rate">
                                                            <i class="far fa-star active"></i>
                                                            <i class="far fa-star active"></i>
                                                            <i class="far fa-star active"></i>
                                                            <i class="far fa-star active"></i>
                                                            <i class="far fa-star"></i>
                                                        </div><!-- ./item_rate -->
                                                        <div class="position-relative">
                                                            <div class="item_price"><span class="new_price">$250.00</span><span class="old_price">$255.00</span></div>
                                                            <button class="add_to_cart option bg_blue_text_whi_hover first" title="Add to cart"><i class="fas fa-shopping-cart"></i></button>
                                                            <div class="item_options">
                                                                <button class="add_to_fav option bg_blue_text_whi_hover" title="Add to wishlist"  onclick="remove(<?php echo $fet['id'] ?>)"><i class="far fa-trash-alt"></i></button>
                                                                <button class="add_to_compare option bg_blue_text_whi_hover" title="Add to compare"><i class="far fa-clone"></i></button>
                                                            </div><!-- ./item_options -->
                                                        </div>
                                                    </div><!-- ./item_content -->
                                                </div><!-- ./product_item -->



                                                
    <?php
}



?>

