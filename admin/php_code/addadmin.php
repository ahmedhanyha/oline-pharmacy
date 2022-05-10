<?php



include("../connection.php");
session_start();


    $email = $_POST["email"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $age = $_POST["age"];
    $phone = $_POST["phone"];
    $Password = $_POST["Password"];
    $confirm_password = $_POST["confirm_password"];



    $status = 0;



        
    $avatarName = $_FILES['file']['name'];
    $avatarType = $_FILES['file']['type'];
    $avatarTmpName = $_FILES['file']['tmp_name'];
    $avatarize = $_FILES['file']['size'];

    $avatar1 = rand(0,10000000).'_' .$avatarName;

    move_uploaded_file($avatarTmpName,"upload\avatar\\".$avatar1);
    


    

    $sel = $con->prepare("SELECT * FROM `registrations` WHERE email  =:email ");

    $sel->bindParam("email",$email);

    $sel->execute();

    $c = $sel->rowCount();

    $fet = $sel->fetch();


    if($c === 1)
    {
        echo "the email  already exist";
    }
    else
    {
        $ins = $con->prepare("INSERT INTO `registrations`(first_name,last_name,email, age,phone,`password`,`confirm_password`,`status`,`image`)  VALUE(:first_name,:last_name,:email,:age,:phone,:password,:confirm_password,:status,:image)");

        $ins->bindParam("first_name",$firstname);
        $ins->bindParam("last_name",$lastname);
        $ins->bindParam("email",$email);
        $ins->bindParam("age",$age);
        
        $ins->bindParam("phone",$phone);
        $ins->bindParam("password",$Password);
        $ins->bindParam("confirm_password",$confirm_password);
        $ins->bindParam("status",$status);
        $ins->bindParam("image",$avatar1);

  

        if($ins->execute())
        {
            echo " sucessfully sign in please log in  ";
        }
    }


?>