<?php



include("../connection.php");
session_start();


echo $_SESSION["id"];
    $title  = $_POST["title"];


    $activate = 0;



        
    $avatarName = $_FILES['file']['name'];
    $avatarType = $_FILES['file']['type'];
    $avatarTmpName = $_FILES['file']['tmp_name'];
    $avatarize = $_FILES['file']['size'];

    $avatar1 = rand(0,10000000).'_' .$avatarName;

    move_uploaded_file($avatarTmpName,"upload\avatar\\".$avatar1);
    


    

    $sel = $con->prepare("SELECT * FROM `category` WHERE title =:title");

    $sel->bindParam("title",$title);

    $sel->execute();

    $c = $sel->rowCount();

    $fet = $sel->fetch();


    if($c === 1)
    {
        echo "the category already exist";
    }
    else
    {
        $ins = $con->prepare("INSERT INTO `category`(title,`image`,activate,admin_id)  VALUE(:title,:image,:activate,:admin_id)");

        $ins->bindParam("title",$title);
        $ins->bindParam("image",$avatar1);
        $ins->bindParam("activate",$activate);
        $ins->bindParam("admin_id",$_SESSION["id"]);

  

        if($ins->execute())
        {
            echo " sucessfully sign in please log in  ";
        }
    }


?>