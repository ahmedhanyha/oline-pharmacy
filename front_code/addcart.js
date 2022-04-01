

function add_cart(id)
{
    let add_to_cart_id = id;
    let xml = new XMLHttpRequest;
    xml.open("post","front_code/addcart.php",true);

    
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xml.send("add_to_cart_id="+add_to_cart_id);
    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
           login1.innerHTML = this.responseText;

      
        }
    }
}


