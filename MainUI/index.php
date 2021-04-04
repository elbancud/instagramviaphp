<?php
include '../upload.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title>MAIN UI</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
</head>

<body id="body">
  <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
  <form method="post" action="../upload.php" enctype="multipart/form-data" target="dummyframe" id="form">
    <div class="container">
      <!-- NAVIGATION -->
      <nav class="d-flex">
        <div>
          <a href="#">BULAGTOK</a>
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
          <div class="dropdown me-1">
            <button type="button" class="btn radius btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
              </svg>
            </button>
            <ul class="dropdown-menu padding animate__animated animate__fadeIn " aria-labelledby=" dropdownMenuOffset">
              <h5> Create</h5>
              <li><a class="dropdown-item" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#postModal">
                  <img src="img/post-icon.png">
                  <span class="post-text">Post</span><br>
                  <span class="post-text2">Share a post on News Feed.</span></a>
              </li>
              <li><a class="dropdown-item" type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#">
                  <img src="img/myday-icon.png">
                  <span class="post-text">Story</span><br>
                  <span class="post-text2">Share a photo or write something.</span> </a></li>
            </ul>
          </div>
          <div class="dropdown me-1">
            <button type="button" class="btn radius btn-secondary dropdown-toggle" id="dropdownMenuOffset" data-bs-toggle="dropdown" aria-expanded="false" data-bs-offset="10,20">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z" />
              </svg>
            </button>
            <ul class="dropdown-menu padding animate__animated animate__fadeIn " aria-labelledby="dropdownMenuOffset">
              <h5> Settings</h5>

              <li>
                <a href="settings.php" class="dropdown-item" type="button" class="btn btn-secondary">
                  <img src="img/settings-icon.png">
                  <span class="post-text">Security</span><br>
                  <span class="post-text2">Reset your security shit.</span>
              </li>
              <li type="submit" name="logout">
                <a class="dropdown-item" href="#">
                  <img src="img/logout-icon.png">
                  <span class="post-text">Logout</span>
                </a>
              </li>
            </ul>
          </div>
        </div>



      </nav>

      <!-- MODAL FOR POST  -->

      <div class="modal fade" id="postModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">


          <div class="modal-content padding-short">
            <div class="modal-header ">
              <h5 class="modal-title text-align-center">Create post</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>

            <!-- MODAL BODY-->
            <div class="uploadFile">
              <div class="modal-body input-group ">
                <label for="caption">Enter caption</label>
                <input type="text" id="caption" name="caption">
              </div>

            </div>
            <div class="uploadFile">
              <h5 id="uploadTitle" style="margin: 0;"></h5>
            </div>

            <div class=" uploadFile">

              <label for="fileUpload" class="btn-1">Drag or choose your file here</label>
              <!-- <input type="file" class="" id="fileUpload" name="file" accept="image/*" onchange="document.getElementById('uploadTitle').innerHTML = this.files[0].name; "> -->

              <!-- <div class="picture_uploaded">
              <img src="" id="imgUpload" alt="" class="imgUpload">
            </div> -->
            </div>
            <div class="modal-footer">
              <button type="submit" name="post" id="post" class="btn btn-primary">Post</button>
            </div>
          </div>

        </div>
      </div>
      <div class="modal fade" id="upload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">


          <div class="modal-content padding-short">
            <div class="modal-header ">
              <h5 class="modal-title text-align-center">Update profile picture</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>

            </div>

            <!-- MODAL BODY-->
            <div class="uploadFile">

              <h5 id="uploadTitleProfile" style="margin: 0;"></h5>
            </div>
            <div class=" uploadFile">

              <label for="fileProfileUpload" class="btn-1">Choose your file here</label>
              <input type="file" id="fileProfileUpload" name="profilePictureFile" accept="image/*">

              <!-- <div class="picture_uploaded">
              <img src="" id="imgUpload" alt="" class="imgUpload">
            </div> -->
            </div>
            <div class="modal-footer">
              <button type="submit" name="postProfilePicture" id="uploadProfile" class="btn btn-primary">Upload</button>
            </div>
          </div>

        </div>
      </div>
      <main>

        <div class="container">
          <div class="box-small">
            <div class="box-my-day">
              <div class="header">
                <div class="profile">
                  <div class="logo">
                  </div>
                  <div class="name">

                  </div>
                </div>
              </div>

            </div>
            <div class="box-my-day">

            </div>
            <div class="box-my-day">

            </div>
          </div>
        </div>
      </main>
      <main>
        <div class="container">
          <?php include '../MainUI/divUpload.php' ?>

      </main>


    </div>
  </form>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="../scripts/upload.js"></script>
  <script src="script.js"></script>
  <script src="profileUpload.js"></script>

</body>

</html>