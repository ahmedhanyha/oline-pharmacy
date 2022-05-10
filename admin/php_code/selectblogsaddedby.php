<?php

include("../connection.php");

session_start();


    $adminblogs = $_POST["adminblogs"];

    $sel = $con->prepare("SELECT * FROM blogs WHERE admin_id=:admin_id");

    $sel->bindparam("admin_id",$adminblogs);

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
            <span class="see-more">     <i class="fas fa-plus"></i> </span>
        
            </td>

        </tr>


        <?php
    }


?>