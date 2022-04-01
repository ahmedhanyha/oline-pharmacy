<?php

include("../connection.php");


$sel = $con->prepare("SELECT * FROM category");


$sel->execute();

$fets = $sel->fetchAll();

foreach($fets as $fet)
{
    ?>
        <?php echo $fet["title"] ?>
    <?php
}


?>