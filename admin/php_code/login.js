
let login = document.getElementById("login");
let next = document.getElementById("next");

login.onclick=function()
{

    let email = document.getElementById("email");

  

    let password = document.getElementById("inputPassword");

  

    var xml = new XMLHttpRequest;

    xml.open("post","php_code/login.php",true);
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("email="+email.value+"&password="+password.value);

    xml.onreadystatechange=function()
    {

        if(this.status === 200)
        {
            next.innerHTML =  this.responseText;
        }

      
    }
}