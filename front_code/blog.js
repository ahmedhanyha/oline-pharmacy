let left_blog = document.getElementById("left_blog")
function getAll()
{
    let xml = new XMLHttpRequest;
    xml.open("get","front_code/blog.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            left_blog.innerHTML=this.responseText;
        }
    }


}

getAll();


let blog_category1 = document.getElementById("blog_category")
function blog_category()
{
    let xml = new XMLHttpRequest;
    xml.open("get","front_code/blog_category.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            blog_category1.innerHTML=this.responseText;
        }
    }


}

blog_category();



let blog21 = document.getElementById("blog2")
function blog2()
{
    let xml = new XMLHttpRequest;
    xml.open("get","front_code/blog2.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            blog21.innerHTML=this.responseText;
        }
    }


}

blog2();
