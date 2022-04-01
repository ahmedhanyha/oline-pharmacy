<?php

include("../connection.php");


$sel = $con->prepare("SELECT * FROM category");


$sel->execute();

$fets = $sel->fetchAll();

foreach($fets as $fet)
{
    ?>
             
             <div class="ahmed">
                        <div class="item">
                            <a href="shop.html" class="categories_item">
                                <div class="categories_item_img"><img src="assets/image/index/categories/cat-2.jpg" alt=""></div>
                                <div class="categories_item_text">
                                    <h3 class="categories_item_title">personl care</h3>
                                </div><!-- ./categories_item_text -->
                            </a><!-- ./categories_item -->
                        </div><!-- ./item -->

                        
                    </div>
    <?php
}


?>