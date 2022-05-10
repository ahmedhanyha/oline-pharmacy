<?php



include("../connection.php");
session_start();




    $title  = $_POST["title"];
    $content  = $_POST["content"];


    $activate = 0;

$x = date('Y-m-d');



        
    $avatarName = $_FILES['file']['name'];
    $avatarType = $_FILES['file']['type'];
    $avatarTmpName = $_FILES['file']['tmp_name'];
    $avatarize = $_FILES['file']['size'];

    $avatar1 = rand(0,10000000).'_' .$avatarName;

    move_uploaded_file($avatarTmpName,"upload\avatar\\".$avatar1);
    


    

    $sel = $con->prepare("SELECT * FROM `blogs` WHERE title =:title");

    $sel->bindParam("title",$title);

    $sel->execute();

    $c = $sel->rowCount();

    $fet = $sel->fetch();


    if($c === 1)
    {
        echo "the blogs already exist";
    }
    else
    {
        $ins = $con->prepare("INSERT INTO `blogs`(title,`content`,`image`,`data`, admin_id)  VALUE(:title,:content,:image,:data,:admin_id)");

        $ins->bindParam("title",$title);
        $ins->bindParam("content",$content);
        $ins->bindParam("image",$avatar1);
        $ins->bindParam("admin_id",$_SESSION["id"]);
        $ins->bindParam("data",$x);

  

        if($ins->execute())
        {
            echo $x;
        }
    }


?>