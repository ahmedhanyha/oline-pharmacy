let cart = document.getElementById("cart");
function getAll()
{
    let xml = new XMLHttpRequest;
    xml.open("get","front_code/select_cart.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            cart.innerHTML=this.responseText;
        }
    }


}
getAll();


let delete1 = document.getElementById("delete1");

function remove(cart_id)
{
        
    let xml = new XMLHttpRequest;
    xml.open("post","front_code/deletecart.php",true);
    
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xml.send("cart_id="+cart_id);
    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            delete1.innerHTML = this.responseText;
            getAll();
      
        }
    }

}