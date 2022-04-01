<?php
include("../connection.php");

$sel=$con->prepare("SELECT * FROM `products`");

$sel->execute();

$fets = $sel->fetchAll();



foreach($fets as $fet)
{
    ?>
        <li><a href="product_detail.php?id=<?php echo $fet["id"] ?>" class="filter_name"> <?php echo $fet["product_name"] ?> </a><span class="items_num">(<?php echo $fet["quantity"] ?>)</span></li>

    <?php
}



?>

