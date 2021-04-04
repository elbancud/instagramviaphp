<?php
include 'db.php';
if (isset($_POST['signup'])) {
    header("location: http://localhost/php%20project/index.php");
    exit();
}


if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $checkLogin = mysqli_query($conn, "SELECT username, password FROM iguserprofile WHERE username = '" . $username . "' AND  password = '" . $password . "'");
    if (mysqli_num_rows($checkLogin) > 0) {
        // header("Location: http://localhost/php%20project/profile.php");
        print("success");

        session_start();
        $sendId = mysqli_query($conn, "SELECT * FROM iguserprofile WHERE username = '" . $username . "'");

        while ($row = mysqli_fetch_assoc($sendId)) {
            $_SESSION["firstName"] = $row['firstName'];
            $_SESSION["username"] = $row['username'];
        }
        $usernameSession = $_SESSION['username'];

        if (mysqli_query($conn, "DESCRIBE `$usernameSession`")) {
        } else {
            $sql = "CREATE TABLE $usernameSession (
                    id INT(255) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    caption VARCHAR(255) NOT NULL,
                    imageUrl VARCHAR(255) NOT NULL
            )";
            if ($conn->query($sql) === TRUE) {
            } else {
            }
        }
    } else {
        print('Incorrect username or Password');
    }
}
