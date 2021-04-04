$(document).ready(function(){
    $("#submitBtn").click(function () {
      
    
        $.ajax({
            url: 'http://localhost/php%20project/MainUI/updateSettings.php',
            type: 'post',
            data: {
                current: $("#currentPassword").val(),
                new: $("#newPassword").val(),
                retype: $("#retypeNewPassword").val(),
            },
            success: function (result) {
                $("#result").html(result);
                if (result == "Perfect! Record updated successfully") {
                    $("#form")[0].reset();
              }

            }
        });


    });
    
    $("#nameBtn").click(function () {
      
        
        $.ajax({
            url: 'http://localhost/php%20project/MainUI/updateNameSettings.php',
            type: 'post',
            data: {
                fName: $("#fName").val(),
                mName: $("#mName").val(),
                lName: $("#lName").val(),
            },
            success: function (result) {
       
                if (confirm(result) && result =="Perfect! First name Updated") {
                    $("#form")[0].reset();
                       location.reload();
                }
                else if (confirm(result) && result =="Perfect! Middle name Updated") {
                    $("#form")[0].reset();
                       location.reload();
                }
                else if (confirm(result) && result =="Perfect! Last name Updated") {
                    $("#form")[0].reset();
                       location.reload();
                }
                else if (confirm(result) && result == "Perfect! First name UpdatedPerfect! Middle name UpdatedPerfect! Last name Updated") {
                    $("#form")[0].reset();
                    location.reload();     
            }
            }
        });


    });
    
      
        
      
    $("#userNameBtn").click(function () {
        $.ajax({
            url: 'http://localhost/php%20project/MainUI/updateUserNameSettings.php',
            type: 'post',
            data: {
                uName: $("#uName").val()
            },
            success: function (result) {
                if (confirm(result) && result == "Perfect! User name Updated") {
                    $("#form")[0].reset();
                    location.reload();
                }
            }
        });
        
    });

});