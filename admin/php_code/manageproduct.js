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

/****** filter ****/

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

/****   delete  ***/

function deleteproduct(x)
{
    let delet1 =document.getElementById("delet");
    let id = x;

    console.log(id)


    let xml = new XMLHttpRequest;
    xml.open("post","php_code/deleteproduct.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("product_id="+id);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            getAll();

           //delet1.innerHTML=this.responseText;
        }

    }

    
}






function Activate(x)
{
    let id = x;

  
    let xml = new XMLHttpRequest;
    xml.open("post","php_code/Activateproduct.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("product_id="+id);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            getAll();
        }

    }
}




function Activated(x)
{
    let id = x;
  
    let xml = new XMLHttpRequest;
    xml.open("post","php_code/Activatedproduct.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("product_id="+id);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            getAll();
        }

    }
}























$(document).ready(function () {
    $("#add_product").on("submit",function(e)
    {
        e.preventDefault();

        $.ajax({
            type:'POST',
            url: "php_code/addproduct.php",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (response) {
                getAll();

           
            }
        });
    })
});


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

getAllCtegories();