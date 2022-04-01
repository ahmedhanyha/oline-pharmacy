let categories_product = document.querySelector("#categories_product")



function getAll()
{
    let xml = new XMLHttpRequest;
    xml.open("get","front_code/category_index.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            categories_product.innerHTML=this.responseText;
        }
    }


}

//getAll();
