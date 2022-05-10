let inner = document.getElementById("inner")

let adminblogs= document.getElementById("adminblogs").value;


function getAll()
{
    
    let xml = new XMLHttpRequest;
    xml.open("post","php_code/selectblogsaddedby.php",true);

    
    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");

    xml.send("adminblogs="+adminblogs);
    xml.onreadystatechange=function()
    {
        if(this.status===200)
        {
           inner.innerHTML = this.responseText;

      
        }
    }


}

getAll();





$(document).ready(function () {
    $("#add_category").on("submit",function(e)
    {
        e.preventDefault();

        $.ajax({
            type:'POST',
            url: "php_code/addcategory.php",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (response) {
                getAll();                      
            }
        });
    })
});






function deletecategory(x)
{

    let id = x;


    let xml = new XMLHttpRequest;
    xml.open("post","php_code/deletecategory.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("category_id="+id);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            getAll();

        }

    }   
}



let filter = document.getElementById("filter");

filter.onkeyup = function()
{
        let x = filter.value;

        let xml = new XMLHttpRequest;

        xml.open("post","php_code/filtercategory.php",true);

        xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");

        xml.send("title="+x);

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



function Activate(x)
{
    let id = x;

  
    let xml = new XMLHttpRequest;
    xml.open("post","php_code/Activatecategory.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("category_id="+id);

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
    xml.open("post","php_code/Activatedcategory.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("category_id="+id);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            getAll();
        }

    }
}
