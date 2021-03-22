<?php
if (isset($_POST['submit'])) {
    if (
        $_POST['firstName'] == '' || $_POST['middleName'] == '' || $_POST['lastName'] == '' || $_POST['email'] == '' ||
        $_POST['username'] == '' || $_POST['password'] == '' || $_POST['confirmPassword'] == ''
    ) {
    } else {
        print("<h3 class=\"success\">Sucess, Login</h3>");
        // header("location: http://localhost/php%20project/login.php");
        // exit();
        $_POST = array();
    }
}
if (isset($_POST['signup'])) {
    header("location: http://localhost/php%20project/index.php");
    exit();
}
