let inner = document.getElementById("inner")
function getAll()
{
    let xml = new XMLHttpRequest;
    xml.open("get","php_code/selectadmindata.php",true);

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

function delet(x)
{
    let delet1 =document.getElementById("delet");
    let id = x;

    console.log(id)


    let xml = new XMLHttpRequest;
    xml.open("post","php_code/deleteadmin.php",true);

    xml.setRequestHeader("Content-type","application/x-www-form-urlencoded");
    xml.send("admin_id="+id);

    xml.onreadystatechange=function()
    {
        if(this.status === 200)
        {
            getAll();

           //delet1.innerHTML=this.responseText;
        }

    }

    
}






$(document).ready(function () {
    $("#add_admin").on("submit",function(e)
    {
        e.preventDefault();

        $.ajax({
            type:'POST',
            url: "php_code/addadmin.php",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (response) {
                getAll();                    
            }
        });
    })
});


