// const submitBtn = document.getElementById("submit");
// const firstName = document.getElementById("firstName");
// const lastName = document.getElementById("lastName");
// const middleName = document.getElementById("middleName");
// const email = document.getElementById("email");
const username = document.getElementById("username");
const password = document.getElementById("password");
const passwordConfirmation = document.getElementById("passwordConfirmation");
// const fail = document.getElementById("fail");
// const success = document.getElementById("success");
// const login = document.getElementById("login");
     // if (firstName.value == "" || lastName.value == "" || middleName.value == "" || email.value == "" || username.value == ""||password.value == "" || passwordConfirmation.value == "" ) {
            //     fail.innerHTML = "Please Complete the fields";
            //     event.preventDefault();
            // } else if (passwordConfirmation.value != password.value) {
        
            //     fail.innerHTML = "Password doesn't match";
            //     event.preventDefault();
            //     passwordConfirmation.style.borderBottom = "1px solid #fc100d";
            //     password.style.borderBottom = "1px solid #fc100d";

            // } else {
        

            // }
$(document).ready(function(){
  $("#submit").click(function(){
        

            if ($("#firstName").val() == "" || $("#lastName").val() == "" || $("#middleName").val() == "" || $("#email").val() == "" || $("#username").val() == "" || $("#password").val() == "" ||$("#email").val() == "" || $("#passwordConfirmation").val() == "") {
                $("#fail").html("Please Complete the fields");
            } else {
                $.ajax({
                    type: "post",
                    url: "inputValidation.php",
                    data: {
                        firstName: $("#firstName").val(),
                        middleName: $("#middleName").val(),
                        lastName: $("#lastName").val(),
                        email: $("#email").val(),
                        username: $("#username").val(),
                        password: $("#password").val(),
                        passwordConfirmation: $("#passwordConfirmation").val(),
                       
                    },
                    success: function (data) {
                        if (data == "error:username") {
                            fail.innerHTML = "Username already existed";

                            $("#username").css('border-bottom', '1px solid #fc100d');
                            
                        } else if (data == "error:password") {
                           fail.innerHTML = "Password doesn't match";
                            $("#passwordConfirmation").css('border-bottom', '1px solid #fc100d');
                            $("#password").css('border-bottom', '1px solid #fc100d');
                            $("#username").css('border-bottom', '1px solid #464646');
                            
                        } else {
                            $("#password").css('border-bottom', '1px solid #464646');
                             $("#passwordConfirmation").css('border-bottom', '1px solid #464646');
                            $("#username").css('border-bottom', '1px solid #464646');
                            fail.innerHTML = "";
                            success.innerHTML = "Success";
                            window.location.replace("http://localhost/php%20project/login.php");    
                            
                        }
                    }
                });
    
        }
                    
           
  });
});
// $( document ).ready(function() {
//     $("#submit").click(function() {
    
        //     // if (firstName.value == "" || lastName.value == "" || middleName.value == "" || email.value == "" || username.value == ""||password.value == "" || passwordConfirmation.value == "" ) {
        //     //     fail.innerHTML = "Please Complete the fields";
        //     //     event.preventDefault();
        //     // } else if (passwordConfirmation.value != password.value) {
        
        //     //     fail.innerHTML = "Password doesn't match";
        //     //     event.preventDefault();
        //     //     passwordConfirmation.style.borderBottom = "1px solid #fc100d";
        //     //     password.style.borderBottom = "1px solid #fc100d";

        //     // } else {
        

        //     // }

        //     if ($("$firstName").val() == "" || $("$lastName").val() == "" || $("$middleName").val() == "" || $("$email").val() == "" || $("$username").val() == "" || $("$email").val() == "" || $("$passwordConfirmation").val() == "") {
        //         $("#fail").html("Please Complete the fields");
        //     } else {
        //         $.ajax({
        //             url: "../inputValidation.php",
        //             type: "post",
        //             data: {
        //                 firstName: $("#firstName").val(),
        //                 middleName: $("#middleName").val(),
        //                 lastName: $("#lastName").val(),
        //                 email: $("#email").val(),
        //                 username: $("#username").val(),
        //                 password: $("#password").val(),
        //                 passwordConfirmation: $("#passwordConfirmation").val(),
                       
        //             },
        //             success: function (data) {
        //                 alert(data);
        //             }
        //         });
    
        // }
                    
           
    

   
    // });
    // });
