let category_inside = document.getElementById("category_inside")
function getAll()
{
    let xml = new XMLHttpRequest;
    xml.open("get","front_code/blog_details_category.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            category_inside.innerHTML=this.responseText;
        }
    }


}

getAll();
