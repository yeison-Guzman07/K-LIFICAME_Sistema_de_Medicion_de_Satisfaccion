$(document).ready(function(){
    $(".exit").click(function(){
        $.ajax({
            url: "../sources/php/logout.php",
            type: "POST",
            success: function(data){
                // Redireccionar a la página principal u otra página de tu elección
                window.location.href = "../";
            }
        });
    });
});