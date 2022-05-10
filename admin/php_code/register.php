<?php

include("../connection.php");

    $first_name = $_POST["first_name"];

    $last_name = $_POST["last_name"];

    $age = $_POST["age"];

    $phone = $_POST["phone"];

    $email = $_POST["email"];

    $password = $_POST["password"];

    $confirm_password = $_POST["confirm_password"];


        
    $avatarName = $_FILES['file']['name'];
    $avatarType = $_FILES['file']['type'];
    $avatarTmpName = $_FILES['file']['tmp_name'];
    $avatarize = $_FILES['file']['size'];

    $avatar1 = rand(0,10000000).'_' .$avatarName;

    move_uploaded_file($avatarTmpName,"upload\avatar\\".$avatar1);
    


    

    $sel = $con->prepare("SELECT * FROM `registrations` WHERE email =:email");

    $sel->bindParam("email",$email);

    $sel->execute();

    $c = $sel->rowCount();

    $fet = $sel->fetch();


    if($c === 1)
    {
        echo "the email already exist";
    }
    else
    {
        $ins = $con->prepare("INSERT INTO `registrations`(first_name,last_name,email,age,phone,`password`,confirm_password,`status`,`image`)  VALUE(:first_name,:last_name,:email,:age,:phone,:password,:confirm_password,'1',:image)");

        $ins->bindParam("first_name",$first_name);
        $ins->bindParam("last_name",$last_name);
        $ins->bindParam("email",$email);
        $ins->bindParam("age",$age);
        $ins->bindParam("phone",$phone);
        $ins->bindParam("password",$password);
        $ins->bindParam("confirm_password",$confirm_password);
        $ins->bindParam("image",$avatar1);

  

        if($ins->execute())
        {
            echo " sucessfully sign in please log in  ";
        }
    }


?>