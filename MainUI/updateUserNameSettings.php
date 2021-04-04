<?php
include '../db.php';
session_start();
$usernameSession = $_SESSION['username'];

//check if post is set
if ($_POST['uName'] == "") {
    print("Please Enter a username");
} else {

    $username = $_POST['uName'];

    //check if existing
    $checkExistence = mysqli_query($conn, "SELECT * FROM iguserprofile WHERE username='$username'");

    //check if the no change
    $checkUsername = mysqli_query($conn, "SELECT username FROM iguserprofile WHERE username='$username'");
    $updateUsername = "UPDATE iguserprofile set username= '" . $username . "' WHERE username = '" . $usernameSession . "'";

    //check if same
    if (mysqli_num_rows($checkUsername) > 0) {
        print("Oops,You entered the same Username");
    } else {
        if (mysqli_num_rows($checkExistence) > 0) {
            print("Oops, Username already existed");
        } else {
            if (mysqli_query($conn, $updateUsername)) {
                print("Perfect! User name Updated");
                $_SESSION['username'] = $username;
            }
        }
    }

    //
}
