<?php include("template/header.php");?>


<div class="header">
    <div class="container">
         <h2 class="h1 text-center"> Customer Login </h2>
    </div>
</div>

<div class="reistration text-center login">
    <div class="container">
        <div class="registration-content">

        <h2 class="h1"> Registered Customers </h2>

        <p class="addres"> If you have an account, sign in with your email address. </p>
            <div class="registration-form">
                <form action="" method="post">
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-3 col-form-label"> Email </label>
                        <div class="col-sm-9">
                        <input type="email" class="form-control" id="email">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-3 col-form-label"> Password </label>
                        <div class="col-sm-9">
                        <input type="password" class="form-control" id="inputPassword">
                        </div>
                    </div>


                    <br>
                    <br>
                    <button type="button" class="btn btn-dark text-left" id="login"> Login </button>  <a href="forget_password.php"> Forgot Your Password? </a>

                    <span id="next">  </span>
                </form>

  
                <br>
                <br>
                <br>
      


                <h2 class="h1"> New Customers </h2>

                

                <p class="lead text-center">
                Creating an account has many benefits: check out faster, keep more than one address, track orders and more.
                </p>

                <br>
                
                <br>


                <button type="button" class="btn btn-dark"> Register </button>

              

            </div>
        </div>


    </div>
    

</div>



<?php include("template/footer.php");?>

<script src="php_code/login.js"></script>