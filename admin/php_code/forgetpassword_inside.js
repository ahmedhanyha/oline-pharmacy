let email = document.getElementById("email");
let phone = document.getElementById("phone");
let password = document.getElementById("password");
let confirm_password = document.getElementById("confirm_password");

let forget_password = document.getElementById("forget_password");


forget_password.onclick = function()
{
    let xml = new XMLHttpRequest;
    xml.open("post","php_code/forgetpassword_inside.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("email="+email.value+"&phone="+phone.value+"&password="+password.value+"&confirm_password="+confirm_password.value);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            console.log(this.response)
        }

    }

}