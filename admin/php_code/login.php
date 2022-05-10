<?php

    session_start();
    include("../connection.php");

    $email = $_POST["email"];

    $password = md5($_POST["password"]);



    $sel=$con->prepare("SELECT * FROM `registrations` WHERE email=:email AND password=:password");

    $sel->bindParam("email",$email);
    $sel->bindParam("password",$password);
    $sel->execute();
    $c = $sel->rowCount();

    $fet = $sel->fetch();

    if($c === 1 )
    {

        $_SESSION["id"] = $fet["id"];

        $_SESSION["status"] = $fet["status"];

        
        echo" <a href='manage_admin.php'> go to dash board  </a> ";

    }
    else
    {
        echo " please enter your data again ";
    }


?>