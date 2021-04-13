<?php

include 'db.php';
session_start();
$username = $_SESSION['username'];

if (isset($_POST['post'])) {

    if (isset($_POST['caption']) && isset($_FILES['file'])) {


        $newImgName = uniqid("IMG", true) . $_FILES['file']['name'];
        $dir = 'assets\uploads/' . $newImgName;

        if (move_uploaded_file($_FILES['file']['tmp_name'], $dir)) {

            $caption = $_POST["caption"];
            //insert in unique db
            $type = "post";

            $sql = "INSERT INTO $username (caption,imageUrl,type) VALUES ('$caption','$newImgName','$type')";

            if (mysqli_query($conn, $sql)) {
                print("<script> alert('File uploaded successfully'); </script>");
                print('<script type="text/javascript"> parent.window.location.reload(true);</script>');
            }
        }
    }
}

//myday upload

if (isset($_POST['mydayPost'])) {

    if (isset($_FILES['mydayFile'])) {


        $newImgName = uniqid("IMG", true) . $_FILES['mydayFile']['name'];
        $dir = 'assets\myday/' . $newImgName;

        if (move_uploaded_file($_FILES['mydayFile']['tmp_name'], $dir)) {

            $caption = "";
            //insert in unique db
            $type = "myday";

            $sql = "INSERT INTO $username (caption,imageUrl,type) VALUES ('$caption','$newImgName','$type')";

            if (mysqli_query($conn, $sql)) {
                print("<script> alert('File uploaded successfully'); </script>");
                print('<script type="text/javascript"> parent.window.location.reload(true);</script>');
            }
        }
    }
}


//profile picture upload
$checkProfile = mysqli_query($conn, "SELECT * FROM iguserprofile where username = '$username'");
if (mysqli_num_rows($checkProfile) > 0) {
    while ($row = mysqli_fetch_assoc($checkProfile)) {

        $imgUrl = $row['profilePicture'];
    }
    if ($imgUrl == "") {
        $profileImg = "img/account-icon.png";
    } else {
        $profileImg = "../assets/profile/" . $imgUrl;
    }
}

if (isset($_POST['postProfilePicture'])) {

    if (isset($_FILES['profilePictureFile'])) {


        $newProfileImageUrl = uniqid("IMG", true) . $_FILES['profilePictureFile']['name'];
        $dir = 'assets\profile/' . $newProfileImageUrl;

        if (move_uploaded_file($_FILES['profilePictureFile']['tmp_name'], $dir)) {

            $updateProfile = "UPDATE iguserprofile SET profilePicture= '" . $newProfileImageUrl . "' WHERE username= '" . $username . "'";


            if (mysqli_query($conn, $updateProfile)) {
                print("<script> alert('File uploaded successfully'); </script>");
                print('<script type="text/javascript"> parent.window.location.reload(true);</script>');
            }
        }
    } else {
    }
}

if (isset($_POST['logout'])) {

    session_destroy();
}
