<?php include("template/header.php");?>

<?php include("connection.php"); ?>

<?php

  if(isset($_GET["id"]))
  {
    $sel = $con->prepare("SELECT * FROM blogs WHERE id=:id");
    $sel->bindparam('id',$_GET["id"]);

    $sel->execute();


    $fet = $sel->fetch();


  }

?>

<?php
    $sel = $con->prepare("SELECT * FROM blogs");

    $sel->execute();


    $fets = $sel->fetchAll();



?>
<div class="blog_datails">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <div class="head">
          <h2 class="h1"> <?php echo $fet["title"]; ?> </h2>
          <p class="category"> <span class="data"> Posted: November 22, 2019 </span> Categories: <span class="category_inside">  Fashion, Marketing Tech, eCommerce, Events, Projects  </span> </p>
        </div>
        <div class="img">
          <img src="php_code/upload/avatar/<?php echo $fet["image"] ?>" alt="">
        </div>
        <div class="blog_content">
            <p class="upper">
            <?php
            echo $fet["content"];
            ?>
          </p>
            <p class="lower">
           
            </p>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="right">
          <div class="section1">
          <h2 class="h1"> Categories </h2>
              <div class="list-group" style="width:88%">

                <a href="#" class="list-group-item list-group-item-action list-group-item-light">Fashion (6)</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-light">Electronics (0)</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-light">Marketing Tech (6)</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-light">eCommerce (6)</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-light">Events (6)</a>
                <a href="#" class="list-group-item list-group-item-action list-group-item-light">Projects (6)</a>

            </div>
          </div>
         
        </div>
        <div class="post">
          <h2 class="h1"> Recent Posts </h2>
          <?php

            foreach($fets as $fet1)
            {
              ?>
                    <div class="post_content">
                      <div class="row">
                        <div class="col-lg-4">
                          <div class="img">
                          <img src="php_code/upload/avatar/<?php echo $fet1["image"] ?>" alt="">
                          </div>
              
                        </div>
                        <div class="col-lg-8">
                          <a href="#"> <?php echo $fet1["title"] ?> </a>
                          <span class="data"> November 22, 2019 </span>
                        </div>
                      </div>
                    </div>
              <?php
            }

          ?>


          
          
        </div>
      </div>
    </div>
  </div>
</div>




<?php include("template/footer.php");?>
