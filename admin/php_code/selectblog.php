<?php
include("../connection.php");

session_start();

$sel=$con->prepare("SELECT * FROM `blogs`");

$sel->execute();

$fets = $sel->fetchAll();

foreach($fets as $fet)
{
    ?>

        <tr>
            <th scope="row">1</th>
            <td> <?php echo $fet["title"] ?> </td>
            <td> 
            <?php echo $fet["data"] ?>
            </td>
        
        
            <td> <?php echo $fet["admin_id"] ?> </td>

            <td>
            <span class="edit"> <i class="fas fa-pen"></i> </span>
            <span class="delete" onclick="deleteblog(<?php echo $fet['id'] ?>)">  <i class="fas fa-times"></i> </span>
            <span class="see-more">   <a href="blogdatails.php?id=<?php echo $fet["id"] ?>"> <i class="fas fa-plus"></i> </a>   </span>
        
            </td>

        </tr>




    <?php
}



?>