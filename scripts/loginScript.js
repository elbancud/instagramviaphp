$(document).ready(function(){
    $("#login").click(function () {
      
      if ($("#username").val() =="" || $("#password").val() == "") {
          $("#fail").html("Please complete the fields");
          
      } else{
        $.ajax({
            url: 'http://localhost/php%20project/loginValidation.php',
            type: 'post',
            data: {
                username: $("#username").val(),
                password: $("#password").val(),
            },
            success: function (result) {
                if (result == "success") {
                    window.location.replace("http://localhost/php%20project/MainUi/index.php");
                } else {
                 $("#fail").html(result) ;
                    
                }
                
            }
        });

    }
  });
});