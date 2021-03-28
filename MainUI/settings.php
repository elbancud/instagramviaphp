<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="wid  th=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/settings.css">

    <title>SETTINGS</title>




  </head>
  <body>

<!-- NAVIGATION -->
<!-- NAVIGATION -->
<!-- NAVIGATION -->

 <nav class="navbar navbar-expand-lg">
  <a class="navbar-brand" href="index.php">Bulagtok</a>
  <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">



      <!-- PROFILE -->
      <!-- PROFILE -->
      <!-- PROFILE -->
      <li class="nav-item profile">
        <a class="nav-link" href="#"><img src="img/profile.png"> Profile</a>
      </li>

      <!-- POST DROPDOWN -->
      <!-- POST DROPDOWN -->
      <!-- POST DROPDOWN -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="dot create">+</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

          <!-- DROPDOWN ITEMS -->
          <h5> Create</h5>

          <a class="dropdown-item" data-toggle="modal" href="#myModal-post"><img src="img/post-icon.png"> 
            <span class="post-text">Post</span><br>
            <span class="post-text2">Share a post on News Feed.</span>
          </a>
          <br>
          <a class="dropdown-item" href="#"><img src="img/myday-icon.png">
            <span class="post-text">Story</span><br>
            <span class="post-text2">Share a photo or write something.</span>
          </a>
        </div>
      </li>

      <!-- SETTINGS DROPDOWN -->
      <!-- SETTINGS DROPDOWN -->
      <!-- SETTINGS DROPDOWN -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="dot"><i class="arrow down"></i></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

          <!-- DROPDOWN ITEMS -->
          <h5> Settings</h5>

          <a class="dropdown-item" data-toggle="modal" href="settings.php"><img src="img/settings-icon.png"> 
            <span class="post-text">Security</span><br>
            <span class="post-text2">Reset your security shit.</span>
          </a>
          <br>
          <a class="dropdown-item" href="#"><img src="img/logout-icon.png">
            <span class="post-text">Logout</span>
          </a>
          <br>
        </div>
      </li>




      
    </ul>
  </div>
</nav>

<!-- BODY -->
<!-- BODY -->
<!-- BODY -->
<div class="container">

  <div class="row">
    <!-- LEFT COLUMN -->
    <!-- LEFT COLUMN -->
    <!-- LEFT COLUMN -->
    <div class="col-md-4">
      <p class="settings">Settings</p>
      <div class="account-left">
        <img src="img/account-icon.png"> <span>Account</span>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
         tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
    </div>


    <!-- RIGHT COLUMN -->
    <!-- RIGHT COLUMN -->
    <!-- RIGHT COLUMN -->
    <div class="col-md-8 right-column">
      <div class="right-column-content">
      <p class="right-column-header">Account</p>
     
      <p class="sub-header">Profile</p>
      <p class="profile-undertext">Lorem ipsum dolor sit amet</p>


          <!-- INPUTS -->
          <!-- INPUTS -->
          <!-- INPUTS -->

          <form>

            <label>Name</label> <br>
            <input type="text" name="name">
            
            <br><br>

            <label>Last Name</label> <br>
            <input type="text" name="lastname">
           
            <br><br>
            
            <label>Username</label> <br>
            <input type="text" name="username">

            <br><br>

            <label>Email</label> <br>
            <input type="Email" name="email">

            <br><br>
            <hr>
            <br><br>

            <p class="sub-header">Reset Password</p>

            <label>Current Password</label> <br>
            <input type="Password" name="current_password">

            <br><br>

            <label>New Password</label> <br>
            <input type="Password" name="new_password">

            <br><br>

            <label>Confirm New Password</label> <br>
            <input type="Password" name="confirm_new_password">

           
          </form>
    



       
      
      </div>  
    </div>
    </div>
  </div>
</div>








    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>