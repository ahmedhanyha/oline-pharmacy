<?php include("template/header.php");?>
<?php include("connection.php"); ?>

<?php

    if(isset($_GET["id"]))
    {
        $sel = $con->prepare("SELECT * from registrations WHERE id=:id");

        $sel->bindparam('id',$_GET["id"]);

        $sel->execute();

        $fet = $sel->fetch();

    }

?>

    <div class="user_profile">
        <div class="container">
            <div class="user_profile_content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="user_profile_left">
                        wfnwenfwiefjw
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="user_profile_right">
                            <div class="upper_user_profile_right">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="img">
                                            <img src="asset/images/p1.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="upper_user_profile_right2">
                                            <h2 class="h1"> <?php echo $fet["first_name"] ?> <?php echo $fet["last_name"] ?> </h2>
                                            <p> <span> <?php  if( $fet['status'] == 1 ) { echo "super admin"; } else { echo "admin"; } ?> -> </span>  <?php echo $fet["email"] ?>   </p>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="lower_user_profile_tabs">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">  Personal Info</button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"> Contributes </button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    
                                        <div class="reistration text-center user_profile">
                                            <div class="container">
                                                <div class="registration-content">

                                                <h2 class="h1"> Personal Information </h2>
                                                    <div class="registration-form">

                                                        <div class="mb-3 row">
                                                            <label for="inputFirstName" class="col-sm-3 col-form-label"> First name </label>
                                                            <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="inputFirstName" value="<?php echo $fet["first_name"] ?>"> 
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="inputFirstName" class="col-sm-3 col-form-label"> Last name </label>
                                                            <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="inputFirstName" value="<?php echo $fet["last_name"] ?>">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="inputage" class="col-sm-3 col-form-label"> Age </label>
                                                            <div class="col-sm-9">
                                                            <input type="numer" class="form-control" id="inputage" value="<?php echo $fet["age"] ?>">
                                                            </div>
                                                        </div>

                                                        

                                                        <div class="mb-3 row">
                                                            <label for="inputPhone" class="col-sm-3 col-form-label"> Phone </label>
                                                            <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="inputPhone" value="<?php echo $fet["phone"] ?>">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3 row">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label"> Image </label>
                                                            <div class="col-sm-9">
                                                            <input class="form-control" type="file" id="formFile">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <br>

                                                        <h2 class="h1"> Sign-in Information </h2>


                                                        <div class="mb-3 row">
                                                            <label for="inputPassword" class="col-sm-3 col-form-label"> Email </label>
                                                            <div class="col-sm-9">
                                                            <input type="email" class="form-control" id="inputPassword" value="<?php echo $fet["email"] ?>">
                                                            </div>
                                                        </div>



                                                        <button type="button" class="btn btn-dark"> Register </button>

                                                    </div>
                                                </div>


                                            </div>
                                            

                                        </div>

                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                    <div class="contributes">
                                        <ul class="list-unstyled">
                                            <li> <a href="AllcategoryAddedBy.php?id=<?php echo $fet["id"] ?>"> All categories Added By  <?php echo $fet["first_name"] ?> <?php echo $fet["last_name"] ?> </a> </li>
                                            <li>  <a href="Allblogsaddedby.php?id=<?php echo $fet["id"] ?>"> All Blogs Added By  <?php echo $fet["first_name"] ?> <?php echo $fet["last_name"] ?> </a> </li>
                                            <li> <a href="#"> All products Added By  <?php echo $fet["first_name"] ?> <?php echo $fet["last_name"] ?> </a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


<?php include("template/footer.php");?>