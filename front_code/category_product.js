let home = document.getElementById("home");

let category_id = document.getElementById("category_id");


function getAll()
{
    
    let xml = new XMLHttpRequest;
    xml.open("post","front_code/category_product.php",true);

    
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xml.send("category_id="+category_id.value);
    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            home.innerHTML = this.responseText;

      
        }
    }


}

getAll();





let profile2 = document.getElementById("profile2")
function getAll2()
{
    let xml = new XMLHttpRequest;
    xml.open("post","front_code/category_product2.php",true);

    
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xml.send("category_id="+category_id.value);
    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            profile2.innerHTML = this.responseText;

      
        }
    }



}

getAll2();


let category = document.getElementById("category")
function getAllCategory()
{
    let xml = new XMLHttpRequest;
    xml.open("get","front_code/shop_catergory.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            category.innerHTML=this.responseText;
        }
    }


}

getAllCategory();




let sidebar_product = document.getElementById("sidebar_product")
function sidebar_product1()
{
    let xml = new XMLHttpRequest;
    xml.open("get","front_code/sidebar_product.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            sidebar_product.innerHTML=this.responseText;
        }
    }


}

sidebar_product1();





/*

let inner = document.getElementById("inner")
function getAll()
{
    let xml = new XMLHttpRequest;
    xml.open("get","php_code/selectproduct.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            inner.innerHTML=this.responseText;
        }
    }


}

getAll();
*/

/****** filter ****/
/*
let filter = document.getElementById("filter");

filter.onkeyup = function()
{
        let x = filter.value;

        let xml = new XMLHttpRequest;

        xml.open("post","php_code/filteradmin.php",true);

        xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");

        xml.send("email="+x);

        xml.onreadystatechange=function()
        {
            if(this.status === 200 && this.readyState=== 4)
            {

                if(x === "")
                {
                    getAll();
                }
                else
                {
                    inner.innerHTML=this.responseText;
                }

            
                
            }
        }

}





let Category_content = document.getElementById("Category_content");



function getAllCtegories()
{
    let xml = new XMLHttpRequest;
    xml.open("get","php_code/selectproduct_category.php",true);

    xml.send();

    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
            Category_content.innerHTML = this.responseText;
        }
    }


}

getAllCtegories();*/