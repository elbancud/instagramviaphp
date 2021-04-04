<?php
include '../db.php';

session_start();

$userName = $_SESSION['username'];

if ($_POST['fName'] == "" && $_POST['mName'] == "" && $_POST['lName'] == "") {

    print("Please complete the fields");
} else if ($_POST['fName'] !== "") {

    $fName = isset($_POST['fName']) ? $_POST['fName'] : "";

    //check if no changes

    $checkCurrentFname = mysqli_query($conn, "SELECT username, firstName FROM iguserprofile WHERE username = '" . $userName . "' AND  firstName = '" . $fName . "'");
    $updateFname = "UPDATE iguserprofile SET firstName='$fName' WHERE username='$userName'";

    if (mysqli_num_rows($checkCurrentFname) > 0) {
        print("Oops, You entered the same first name");
    } else {
        if (mysqli_query($conn, $updateFname)) {
            print("Perfect! First name Updated");
            $_SESSION['firstName'] = $fName;
        }
    }
}
if ($_POST['mName'] !== "") {

    $mName = isset($_POST['mName']) ? $_POST['mName'] : "";

    //check if no changes

    $checkCurrentMname = mysqli_query($conn, "SELECT username, middleName FROM iguserprofile WHERE username = '" . $userName . "' AND  middleName = '" . $mName . "'");
    $updateMname = "UPDATE iguserprofile SET middleName='$mName' WHERE username='$userName'";

    if (mysqli_num_rows($checkCurrentMname) > 0) {
        print("Oops, You entered the same middle name");
    } else {
        if (mysqli_query($conn, $updateMname)) {
            print("Perfect! Middle name Updated");
        }
    }
}
if ($_POST['lName'] !== "") {

    $lName = isset($_POST['lName']) ? $_POST['lName'] : "";

    //check if no changes

    $checkCurrentLname = mysqli_query($conn, "SELECT username, lastName FROM iguserprofile WHERE username = '" . $userName . "' AND  lastName = '" . $lName . "'");
    $updateLname = "UPDATE iguserprofile SET lastName='$lName' WHERE username='$userName'";

    if (mysqli_num_rows($checkCurrentLname) > 0) {
        print("Oops, You entered the same last name ");
    } else {
        if (mysqli_query($conn, $updateLname)) {
            print("Perfect! Last name Updated");
        }
    }
}
