let inner = document.getElementById("inner")
function getAll()
{
    let xml = new XMLHttpRequest;
    xml.open("get","php_code/selectblog.php",true);

    xml.send();

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
    $("#add_blog").on("submit",function(e)
    {
        e.preventDefault();

        $.ajax({
            type:'POST',
            url: "php_code/addblog.php",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (response) {
                getAll();   
                
                
                console.log(response);
            }
        });
    })
});






function deleteblog(x)
{

    let id = x;


    let xml = new XMLHttpRequest;
    xml.open("post","php_code/deleteblog.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("blog_id="+id);

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

        xml.open("post","php_code/filterblog.php",true);

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

/*

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
*/
