<?php

include("../connection.php");

session_start();

echo $_SESSION["id"];
$email = $_POST["email"];

$phone = $_POST["phone"];

$password = md5($_POST["password"]);

$confirm_password = md5($_POST["confirm_password"]);

$sel = $con->prepare("SELECT * FROM registrations WHERE email=:email && phone=:phone && id=:id");

$sel->bindParam('email',$email);
$sel->bindParam('phone',$phone);
$sel->bindParam('id',$_SESSION["id"]);


$sel->execute();

$c = $sel->rowCount();


echo $c;

if($c == 1)
{
    
    if($password === $confirm_password)
    {
        $update = $con->prepare("UPDATE `registrations` SET `password`= :password , confirm_password=:confirm_password WHERE email=:email");

    
        $update->bindParam('email',$email);
        $update->bindParam('password',$password);
        $update->bindParam('confirm_password',$confirm_password);
    
        if($update->execute())
        {
            echo "wemowepovwpoef";
        }
    }
    else
    {
        echo "not equal";
    }


}
else
{
    echo "please , enter your data again";
}

?>