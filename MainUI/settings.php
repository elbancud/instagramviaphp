<?php
include '../upload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>SETTINGS</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/settings.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="settings.js"></script>


</head>

<body>
  <form method="post" id="form">
    <div class="container">
      <nav class="d-flex">
        <div>
          <a href="../MainUI/index.php">
            < Home</a>
        </div>
        <div class="d-flex">
          <div>
            <li class="nav-item profile" data-bs-toggle="modal" data-bs-target="#upload">
              <div class="profileCircle">
                <img src="<?php print($profileImg); ?>">
              </div>
              <?php print($_SESSION['firstName']) ?>
            </li>
          </div>




      </nav>

      <div class="input-forms padding">
        <div class="title">
          <h4>General Account Settings</h4>
        </div>
        <div>
          <div class="title">
            <h6>Edit profile</h6>

          </div>
          <div class="inputs padding">
            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between" data-bs-toggle="modal" data-bs-target="#nameSettings">
              <div class="d-flex w-20 justify-content-between">
                <h6 class="mb-1">Name</h6>

              </div>
              <p class="mb-1"><?php print("$_SESSION[firstName]"); ?></p>
              <small class="text-muted">Edit</small>
            </a>

            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between" data-bs-toggle="modal" data-bs-target="#userNameSettings">
              <div class="d-flex w-20 justify-content-between">
                <h6 class="mb-1">Username</h6>

              </div>
              <p class="mb-1"><?php print("$_SESSION[username]"); ?></p>
              <small class="text-muted">Edit</small>
            </a>

          </div>
          <div class="padding">
            <div class="title">
              <h6>Change Password</h6>

            </div>
            <div class="inputs">
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Current </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="currentPassword" name="currentPassword" autocomplete="off">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">New </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="newPassword" name="newPassword" autocomplete="off">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Re-type new</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="retypeNewPassword" name="passwordConfirmation" autocomplete="off">
              </div>
              <button type="button" class="btn btn-primary" id="submitBtn" name="submitBtn" data-bs-toggle="modal" data-bs-target="#passwordSuccessModal">Save changes</button>

            </div>

          </div>
        </div>
      </div>

      <div class="modal fade" id="passwordSuccessModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content padding-short">
            <div class="modal-header ">
              <h6 class="modal-title text-align-center" id="result"></h6>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="nameSettings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content padding-short">
            <div class="modal-header ">
              <h5 class="modal-title text-align-center">Edit Profile</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- MODAL BODY-->
            <div class="inputs padding">
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">First name </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="fName" name="currentPassword" autocomplete="off">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Middle name </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="mName" name="newPassword" autocomplete="off">
              </div>
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Last name</span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="lName" name="passwordConfirmation" autocomplete="off">
              </div>

            </div>

            <div class="modal-footer">
              <button type="button" name="nameBtn" id="nameBtn" class="btn btn-primary">Save changes</button>
            </div>
          </div>

        </div>
      </div>
      <div class="modal fade" id="userNameSettings" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
          <div class="modal-content padding-short">
            <div class="modal-header ">
              <h5 class="modal-title text-align-center">Edit Username</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <!-- MODAL BODY-->
            <div class="inputs padding">
              <div class="input-group mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Username </span>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="uName" name="username" autocomplete="off">
              </div>


            </div>

            <div class="modal-footer">
              <button type="button" name="nameBtn" id="userNameBtn" class="btn btn-primary">Save changes</button>
            </div>
          </div>

        </div>
      </div>
  </form>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>