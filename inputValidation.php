<?php
include 'db.php';

$firstName = isset($_POST['firstName']) ? $_POST['firstName'] : '';
$middleName = isset($_POST['middleName']) ? $_POST['middleName'] : '';
$lastName = isset($_POST['lastName']) ? $_POST['lastName'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$username = isset($_POST['username']) ? $_POST['username'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$passwordConfirmation = isset($_POST['passwordConfirmation']) ? $_POST['passwordConfirmation'] : '';



$sql = "SELECT * FROM iguserprofile WHERE username='$username'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
    print("error:username");
} else if ($password != $passwordConfirmation) {
    print("error:password");
} elseif ($firstName == "" || $middleName == "" || $lastName == "" || $email == "" || $username == "" || $password == "" || $passwordConfirmation == "") {
    print("error:password");
} else {

    $sql = "INSERT INTO iguserprofile (firstName,middleName, lastName, username, email, password, profilePicture)
                    VALUES ('$firstName','$middleName', '$lastName','$username','$email', '$password', '')";
    if ($conn->query($sql) === TRUE) {
        print("Success");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header("Location: http://localhost/php%20project/login.php");
    exit();
}




if (isset($_POST['login'])) {
    header("location: http://localhost/php%20project/login.php");
    exit();
}
