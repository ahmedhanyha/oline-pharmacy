let add_to_fav = Array.from(document.querySelectorAll(".add_to_fav"));

let login = document.getElementById("login");



function add_fav(id)
{
    let favourite_id = id;

    let xml = new XMLHttpRequest;
    xml.open("post","front_code/addfavourite.php",true);

    
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xml.send("favourite_id="+favourite_id);
    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
           login.innerHTML = this.responseText;

      
        }
    }
}