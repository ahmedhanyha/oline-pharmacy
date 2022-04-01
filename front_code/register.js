

$(document).ready(function () {
    $("#admin_register").on("submit",function(e)
    {
        e.preventDefault();
        $.ajax({
            type:'POST',
            url: "front_code/register.php",
            data: new FormData(this),
            contentType:false,
            processData:false,
            success: function (response) {
                
                console.log(response)
        
            }
        });
    })
});
