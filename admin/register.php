<?php include("template/header.php");?>


<div class="header">
    <div class="container">
         <h2 class="h1 text-center"> Create New Customer Account </h2>
    </div>
</div>

<div class="reistration text-center">
    <div class="container">
        <div class="registration-content">

        <h2 class="h1"> Personal Information </h2>
            <div class="registration-form">
                <form id="admin_register" method="post" enctype="multipart/form-data">

                

                <div class="mb-3 row">
                    <label for="firstname" class="col-sm-3 col-form-label"> First name </label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="firstname" name="first_name">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="lastname" class="col-sm-3 col-form-label"> Last name </label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="lastname"  name="last_name">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="age" class="col-sm-3 col-form-label"> Age </label>
                    <div class="col-sm-9">
                    <input type="number" class="form-control" id="age" name="age">
                    </div>
                </div>

                

                <div class="mb-3 row">
                    <label for="phone" class="col-sm-3 col-form-label"> Phone </label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label"> Image </label>
                    <div class="col-sm-9">
                    <input class="form-control" type="file"  id="file" name="file" >
                    </div>
                </div>
                <br>
                <br>

                <h2 class="h1"> Sign-in Information </h2>


                <div class="mb-3 row">
                    <label for="email" class="col-sm-3 col-form-label"> Email </label>
                    <div class="col-sm-9">
                    <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword" name="password">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="confirm" class="col-sm-3 col-form-label"> confirm password </label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" id="confirm" name="confirm_password">
                    </div>
                </div>

                <button type="submit" class="btn btn-dark" id="register"> Register </button>
                </form>
            </div>
        </div>


    </div>
    

</div>



<?php include("template/footer.php");?>
<script src=""></script>
<script src="php_code/register.js"></script>