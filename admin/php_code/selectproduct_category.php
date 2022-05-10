<?php
include("../connection.php");

session_start();

$sel=$con->prepare("SELECT * FROM `category`");

$sel->execute();

$fets = $sel->fetchAll();

?>
                        <select class="form-select" id="Category" name="Category">
                        <option selected>Choose...</option>

                        <?php

foreach($fets as $fet)
{
    ?>


                          <option value="<?php echo $fet["id"] ?>"> <?php echo $fet["title"] ?> </option>



    <?php
}

                        ?>

</select>
<?php





?>