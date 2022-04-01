<?php

include("../connection.php");
 $blog2 = $con->prepare("SELECT * FROM blogs");

 $blog2->execute();

 $blogs21 = $blog2->fetchAll();


 foreach($blogs21 as $blogs210)
 {
     ?>
                                                           <div class="post_content" >
                                  <div class="row">
                                    <div class="col-lg-4">
                                      <div class="img">
                                      <img src="../admin/php_code/upload/avatar/<?php echo $blogs210["image"] ?>"> 
                                      </div>
                          
                                    </div>
                                    <div class="col-lg-8">
                                      <a href="#"><?php echo $blogs210["title"] ?> </a>
                                      <span class="data"> <?php echo $blogs210["data"]
                                       ?>
                                      </span>
                                    </div>
                                  </div>

                                  
                                </div>



    <?php
 }


?>