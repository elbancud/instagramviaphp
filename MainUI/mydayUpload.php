
<?php
include '../db.php';


$username = $_SESSION['username'];

$firstName = $_SESSION['firstName'];
$sql = "SELECT caption, imageUrl FROM $username WHERE type = 'myday'";
$result = mysqli_query($conn, $sql);
$dbArray = array();


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {


        array_push($dbArray, $row['imageUrl']);
    }
}




for ($outer = sizeof($dbArray) - 1; $outer >= 0; $outer--) {

    print('<div class="carousel-cell animate__animated animate__headShake">');
    print('<div class="box-my-day">');
    $currentItem = $dbArray[$outer];

    print("<img class='myDayImg' src='../assets/myday/$dbArray[$outer]' alt=''>");


    print('<div class="header">');
    print('<div class="profileMyday">');
    print('<div class="profileCircle ">');
    print('<img src="' . $profileImg . '">');
    print('</div>');
    print('<div class="name">');
    print("<h5> $firstName </h5>");

    print('</div>');
    print('</div>');
    print('</div>');
    print('</div>');
    print('</div>');
}
