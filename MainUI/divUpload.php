
<?php
include '../db.php';


$username = $_SESSION['username'];

$sql = "SELECT caption, imageUrl FROM $username WHERE type = 'post'";
$result = mysqli_query($conn, $sql);
$dbArray = array();


if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {

        $columnElements = array();
        $columnElements[0] = $row['caption'];
        $columnElements[1] = $row['imageUrl'];
        array_push($dbArray, $columnElements);
    }
}


for ($outer = sizeof($dbArray) - 1; $outer >= 0; $outer--) {

    print('<div class="box animate__animated animate__headShake">');
    print('<div class="boxHeader">');
    print('<div class="profile-container padding-bottom-less">');
    print('<div class="box-profile">');
    print('</div>');
    print("<h5> $username</h5>");

    print('</div>');

    print('<div class="caption-container ">');
    print("<p>");
    for ($inner = 0; $inner <= 1; $inner++) {

        $currentItem = $dbArray[$outer][$inner];

        if ($inner == 0) {
            print($dbArray[$outer][$inner] . "</p>");
            print('</div>');
            print('</div>');
        } else {
            print('<div class="imageContainer">');
            print("<img src='../assets/uploads/$currentItem' alt=''>");
        }
    }

    print('</div>');
    print('</div>');
}
