<?php

include("../connection.php");
 $blog = $con->prepare("SELECT * FROM blogs");

 $blog->execute();

 $blogs = $blog->fetchAll();


 foreach($blogs as $blog1)
 {
     ?>
                             <div class="left_blog">
                            <div class="row">
      
                                <div class="col-lg-6">
                                    <a  href="blogdatails.php?id=<?php echo $blog1["id"] ?>">
                                        <div class="img">
                                            <img src="../admin/php_code/upload/avatar/<?php echo $blog1["image"] ?>" alt="">
                                        </div>
                            
                                        
                                    </a>
                                    
                                    
                                </div>
                                

                                
                                <div class="col-lg-6">
                                    <a href="blogdatails.php?id=<?php echo $blog1["id"] ?>">
                                        <div class="right">
                                        <p class="upper_date"> <span> <i class="fal fa-calendar-day"></i> </span>  <?php echo $blog1["data"] ?> </p>
                                    <p class="blog_title"> <?php echo $blog1["title"] ?> </p>
                                    <p class="lower_date"> <span class="Posted"> Posted </span>: <?php echo $blog1["data"] ?></p>
                                        <p class="content"> Egestas mus a mus rhoncus adipiscing iaculis facilisis a eu nunc varius a per parturient vestibulum suspendisse aenean semper velit aliquam </p>
                                        <a href="blogdatails.php?id=<?php echo $blog1["id"] ?>" class="read"> Read more </a>
                                        </div>

                                    
                                </a>
                                </div>
    
                                
                            </div>
                        </div>



    <?php
 }


?>