<?php

include("../connection.php");

session_start();

$sel=$con->prepare("SELECT * FROM `registrations`");

$sel->execute();

$fets = $sel->fetchAll();

foreach($fets as $fet)
{
  
    ?>

                    <tr>
                        <th scope="row"> <?php echo $fet["id"] ?> </th>
                        <td> <?php echo $fet["first_name"] ?> <?php echo $fet["last_name"] ?> </td>
                        <td> <a href="user_profile.php?id=<?php echo $fet["id"] ?>" > <?php echo $fet["email"] ?> </a>  </td>
                        <td> <?php echo $fet["age"] ?>  </td>
                        <td> 
                            <?php

                                if($fet["status"] === '0' )
                                {
                                    ?> <span class='admin'> admin </span> <?php
                                }
                                else
                                {
                                    ?> <span class='super-admin'> super-admin </span> <?php
                                }

                            ?>
                            
                        
                      </td>
                        <td> male </td>
                        <td> 
                                <img src="php_code\upload\avatar\<?php echo $fet['image']?> " alt="">
                        </td>
                        <?php
                        if($_SESSION["status"] == 1)
                        {
                            ?>
                            <th scope="col">  <span class="edit"> <i class="fas fa-pen"></i> </span>             <span class="delete" onclick="delet(<?php echo $fet['id'] ?>)">  <i class="fas fa-times"></i> </span>  </th>

                            <?php
                 
                        }
                           
                     
                            
                        ?>

   
                    </tr>


    <?php
}




?>