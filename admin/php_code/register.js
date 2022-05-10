

$(document).ready(function () {
    $("#admin_register").on("submit",function(e)
    {
        e.preventDefault();
        $.ajax({
            type:'POST',
            url: "php_code/register.php",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (response) {
                
                console.log(response)
        
            }
        });
    })
});
