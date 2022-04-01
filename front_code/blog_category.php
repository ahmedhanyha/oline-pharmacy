<?php

include("../connection.php");
 $blog_category = $con->prepare("SELECT * FROM category");

 $blog_category->execute();

 $blog_categories = $blog_category->fetchAll();


 foreach($blog_categories as $blog_categories1)
 {
     ?>
                            <a href="category_product.php?id=<?php echo $blog_categories1["id"] ?>" class="list-group-item list-group-item-action list-group-item-light"> <?php echo $blog_categories1["title"] ?> </a>


    <?php
 }


?>