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

  <title>MAIN UI</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
  <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>
  <form method="post" action="../upload.php" enctype="multipart/form-data" target="dummyframe" id="form">
    <div class="container">
      <!-- NAVIGATION -->

      <nav class="navbar navbar-expand-lg">
        <div>
          <a class="navbar-brand" href="#">Bulagtok</a>
        </div>
        <div>
          <button class="navbar-dark navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">


              <!-- PROFILE -->
              <li class="nav-item profile">
                <a class="nav-link" href="#"><img src="img/profile.png"><?php print($_SESSION['firstName']) ?> </a>

              </li>

              <!-- POST DROPDOWN -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="dot create">+</span>
                </a>
                <div class="dropdown-menu padding" aria-labelledby="navbarDropdownMenuLink">

                  <!-- DROPDOWN ITEMS -->
                  <h5> Create</h5>

                  <a class="dropdown-item" data-toggle="modal" href="#myModal-post">
                    <img src="img/post-icon.png">
                    <span class="post-text">Post</span><br>
                    <span class="post-text2">Share a post on News Feed.</span>
                  </a>
                  <br>
                  <a class="dropdown-item" href="#">
                    <img src="img/myday-icon.png">
                    <span class="post-text">Story</span><br>
                    <span class="post-text2">Share a photo or write something.</span>
                  </a>
                </div>
              </li>


              <!-- SETTINGS DROPDOWN -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="dot"><i class="arrow down"></i></span>
                </a>
                <div class="dropdown-menu padding" aria-labelledby="navbarDropdownMenuLink">

                  <!-- DROPDOWN ITEMS -->
                  <h5> Settings</h5>

                  <a href="settings.php" class="dropdown-item">
                    <img src="img/settings-icon.png">
                    <span class="post-text">Security</span><br>
                    <span class="post-text2">Reset your security shit.</span>
                  </a>
                  <br>
                  <a class="dropdown-item" href="#">
                    <img src="img/logout-icon.png">
                    <span class="post-text">Logout</span>
                  </a>
                  <br>
                </div>
              </li>





            </ul>
          </div>
        </div>
      </nav>


      <!-- MODAL FOR POST  -->

      <div class="modal fade" id="myModal-post" role="dialog">
        <div class="modal-dialog modal-dialog-centered ">


          <div class="modal-content padding-short">
            <div class="modal-header ">
              <h5 class="modal-title text-align-center">Create post</h5>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- MODAL BODY-->
            <div class="uploadFile">
              <div class="modal-body input-group ">
                <label for="caption">Enter caption</label>
                <input type="text" id="caption" name="caption">
              </div>
            </div>
            <div class=" uploadFile">

              <label for="fileUpload" class="btn-1">Drag or choose your file here</label>
              <input type="file" class="" id="fileUpload" name="file" accept="image/*">

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
            <div class="box-my-day">

            </div>
            <div class="box-my-day">

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

</body>

</html>