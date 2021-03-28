<?php
include '../db.php';


$username = $_SESSION['username'];

$sql = "SELECT caption, imageUrl FROM $username";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        $caption = $row['caption'];
        $image = $row['imageUrl'];

        print('<div class="box">');
        print('<div class="boxHeader">');
        print('<div class="profile-container padding-bottom-less">');
        print('<div class="box-profile">');
        print('</div>');
        print("<h5> $username</h5>");

        print('</div>');

        print('<div class="caption-container ">');
        print("<p> $caption</p>");
        print(' </div>');
        print('</div>');
        print('<div class="imageContainer">');
        print("<img src='../assets/uploads/$image' alt=''>");
        print('</div>');
        print('</div>');
    }
}
