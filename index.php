<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyG's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="scripts/script.js"></script>

</head>

<body>
    <div style="display: none;">
        <?php include 'inputValidation.php' ?>

    </div>
    <form action="" method="POST" id="regForm">
        <header>
            <nav>
                <div class="container">
                    <div class="flex-content">

                        <div class="nav-link">
                            <div class="logo ">
                                <div class="dark-font">Bulagtok</div>
                            </div>
                        </div>
                        <div class="nav-link">
                            <button class="btn dark" name="login"> Login</button>
                        </div>
                    </div>
                </div>
            </nav>
            <div class="box dark"></div>
        </header>
        <main>
            <section class="right-grid">

                <div class="geometric-design">
                    <div class="container">

                        <div class="content-container">
                            <h1>Let's Start shall we?</h1>
                        </div>

                    </div>
                    <div class="circle small  dark"> </div>
                    <div class="circle tiny  dark"> </div>
                    <div class="circle large opacity10 dark"></div>
                    <div class="circle large opacity30 dark"></div>
                    <div class="circle large opacity50 dark"></div>
                    <div class="circle large opacity60 dark"></div>

                </div>
            </section>
            <section class="left-grid dark large-padding">
                <div class="container light-color small-container-right-align">
                    <div class="content-container">
                        <h3 class="fail" id="fail"></h3>
                        <h3 class="success" id="success"></h3>

                        <div class="standard-padding">
                            <h2> Registration</h2>
                        </div>
                        <div class="input-group">
                            <label for="firstName">First name</label>
                            <input type="text" id="firstName" autocomplete="off" name="firstName">
                        </div>
                        <div class="input-group">
                            <label for="middleName">Middle Name</label>
                            <input type="text" id="middleName" autocomplete="off" name="middleName">
                        </div>
                        <div class="input-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" id="lastName" autocomplete="off" name="lastName">
                        </div>
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="text" id="email" autocomplete="off" name="email">
                        </div>
                        <div class="input-group">
                            <label for="email">Username</label>
                            <input type="text" id="username" autocomplete="off" name="username">
                        </div>
                        <div class="input-group">
                            <label for="password">Password</label>
                            <input type="password" id="password" autocomplete="off" name="password">
                        </div>
                        <div class="input-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" id="passwordConfirmation" autocomplete="off" name="passwordConfirmation">
                        </div>
                        <button class="btn light " name="button" id="submit" type="button">
                            Submit
                        </button>

                    </div>
                </div>
            </section>
        </main>

        <!-- <footer>
        <div class="container light-font">
            copyright@Tolentino,Esteban,Bancud-2021
        </div>
    </footer> -->
    </form>
</body>

</html>