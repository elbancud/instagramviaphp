<?php
include '../db.php';
session_start();

if ($_POST['current'] == "" || $_POST['new'] == "" || $_POST['retype'] == "") {
    print("Please complete the fields");
} else {

    $current = isset($_POST['current']) ? $_POST['current'] : "";
    $new = isset($_POST['new']) ? $_POST['new'] : "";
    $retypeNew = isset($_POST['retype']) ? $_POST['retype'] : "";
    $userName = $_SESSION['username'];

    $checkCurrentPassword = mysqli_query($conn, "SELECT password FROM iguserprofile WHERE password = '" . $current . "' ");

    if (mysqli_num_rows($checkCurrentPassword) > 0) {

        if ($new == $retypeNew) {
            $sql = "UPDATE iguserprofile SET password='$new' WHERE username='$userName'";

            if (mysqli_query($conn, $sql)) {
                print("Perfect! Record updated successfully");
            }
        } else {
            print("Oops! Please Retype your new Password");
        }
    } else {
        print("Oh no!, Incorrect current password");
    }
    //     $sql = "UPDATE iguserprofile SET password='$new' WHERE username='$userName'";

}
