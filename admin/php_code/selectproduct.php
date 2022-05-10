<?php
include("../connection.php");

session_start();

$sel=$con->prepare("SELECT * FROM `products`");

$sel->execute();

$fets = $sel->fetchAll();



foreach($fets as $fet)
{
    ?>

                <tr>
                    <th scope="row"> <?php echo $fet["id"] ?> </th>
                    <td> <?php echo $fet["product_name"] ?>  </td>

                    <td> <?php echo $fet["category_id"] ?> </td>
                    <td> <?php echo $fet["price1"] ?>$ </td>
                    <td>  <?php echo $fet["price2"] ?>$ </td>
                    <td>   <?php echo $fet["quantity"] ?> <span> pc </span> </td>
                
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


                    <td>
                        <?php
                            if($fet["status"] == 0 )
                            {
                                ?>  <span class='admin' onclick="Activate(<?php echo $fet['id'] ?>)" > no offer </span>  <?php
                            }
                            else
                            {
                                ?>  <span class='super-admin' onclick="Activated(<?php echo $fet['id'] ?>)"> has offer <?php echo $fet["discount"] ?>% </span>  <?php
                            }
                        ?>
                    
                        
                    
                      </td>
                    <td> 
                            <img src="php_code/upload/avatar/<?php echo $fet["image"] ?>" alt="">
                    </td>

                    <td> <?php echo $fet["admin_id"] ?>  </td>

                    <td>
                    <span class="edit"> <i class="fas fa-pen"></i> </span>
                    <span class="delete" onclick="deleteproduct(<?php echo $fet['id'] ?>)">  <i class="fas fa-times"></i> </span>
                    <span class="see-more" type="button"  data-bs-toggle="modal" data-bs-target="#show-more">     <i class="fas fa-plus"></i> </span>
                
                    </td>

                    </tr>


    <?php
}



?>