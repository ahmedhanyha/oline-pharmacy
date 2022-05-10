<?php
include("../connection.php");

session_start();

$sel=$con->prepare("SELECT * FROM `category`");

$sel->execute();

$fets = $sel->fetchAll();

foreach($fets as $fet)
{
    ?>

        <tr>
            <th scope="row"> <?php echo $fet["id"] ?> </th>
            <td> <?php echo $fet["title"] ?>  </td>
            <td> 
            <img src="php_code\upload\avatar\<?php echo $fet['image']?> " alt="">
            </td>
            <td>
                
            <?php
                if($fet["activate"] == 0 )
                {
                    ?>  <span class='admin' onclick="Activate(<?php echo $fet['id'] ?>)" > Activated </span>  <?php
                }
                else
                {
                    ?>  <span class='super-admin' onclick="Activated(<?php echo $fet['id'] ?>)"> not Activated </span>  <?php
                }
            ?>
            
             </td>
            <td>  <?php echo $fet["admin_id"] ?>  </td>


            <td>
                <span class="edit"> <i class="fas fa-pen"></i> </span>
                <span class="delete" onclick="deletecategory(<?php echo $fet['id'] ?>)">  <i class="fas fa-times"></i> </span>
                <span class="see-more">     <i class="fas fa-plus"></i> </span>
        
            </td>

        </tr>


    <?php
}



?>