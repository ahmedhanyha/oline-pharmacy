<?php

include("../connection.php");


$sel = $con->prepare("SELECT * FROM category");


$sel->execute();

$fets = $sel->fetchAll();

foreach($fets as $fet)
{
    ?>
        <li><a href="category_product.php?id=<?php echo $fet["id"] ?>" class="filter_name"> <?php echo $fet["title"] ?> </a><span class="items_num">( )</span></li>
    <?php
}


?>