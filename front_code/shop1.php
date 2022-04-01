<?php
include("../connection.php");

session_start();

$sel=$con->prepare("SELECT * FROM `products`");

$sel->execute();

$fets = $sel->fetchAll();



foreach($fets as $fet)
{
    ?>

<div class="product_item list_view col-12">
                                                    <div class="item_content product_content">
                                                            <div class="item_img">
                                                                <a href="product.html" ><img src="assets/image/shop/products/product_12_1_1.jpg" alt=""></a>
                                                            </div>
                                                                <div class="product_details">
                                                                    <p><a href="shop.html" class="item_cat">shop</a></p>
                                                                    <a href="product.html" class="item_name text_blue_hover">Chicco Key Fit Infant Orion</a>
                                                                    <p class="item_desc">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolorem laudantium, totam rem aperiam eaque ipsa quae ab illo inventore.</p>
                                                                    <div class="item_rate">
                                                                        <i class="far fa-star active"></i>
                                                                        <i class="far fa-star active"></i>
                                                                        <i class="far fa-star active"></i>
                                                                        <i class="far fa-star active"></i>
                                                                        <i class="far fa-star"></i>
                                                                    </div><!-- ./item_rate -->
                                                                    <div class="position-relative">
        
                                                                        <div class="item_price"><span class="new_price">$250.00</span><span class="old_price">$255.00</span></div>
                                                                        <button class="add_to_cart option bg_blue_text_whi_hover first"   onclick="add_cart(<?php echo $fet['id'] ?>)" title="Add to cart"  ><i class="fas fa-shopping-cart"></i></button>
                                                                        <div class="item_options">
                                                                            <button class="add_to_fav option bg_blue_text_whi_hover"  onclick="add_fav(<?php echo $fet['id'] ?>)" title="Add to wishlist"><i class="far fa-heart"></i></button>
                                                                            <button class="add_to_compare option bg_blue_text_whi_hover" title="Add to compare"><i class="far fa-clone"></i></button>
                                                                        </div><!-- ./item_options -->
                                                                    </div>
                                                                </div><!-- ./product_details -->
                                                    </div><!-- ./item_content -->
                                                </div><!-- ./product_item -->

    <?php
}



?>

