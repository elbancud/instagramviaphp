<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyG's</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/login.css">
</head>

<body>

    <form method="post">
        <header>
            <nav>
                <div class="container">
                    <div class="flex-content">

                        <div class="nav-link">
                            <div class="logo ">
                                <div class="light-font">Bulagtok</div>
                            </div>
                        </div>
                        <div class="nav-link">
                            <button class="btn light" name="signup" type="submit"> Signup</button>

                        </div>
                    </div>
                </div>
            </nav>
            <div class="box dark"></div>
        </header>
        <main>
            <section class="right-grid ">

                <div class="geometric-design dark ">
                    <div class="container small-container-right-align ">

                        <div class="content-container light-font">
                            <h1 class="">Glad you're back</h1>
                        </div>

                    </div>
                    <div class="circle small  light"> </div>
                    <div class="circle tiny  light"> </div>
                    <div class="circle large opacity10 light"></div>
                    <div class="circle large opacity30 light"></div>
                    <div class="circle large opacity50 light"></div>
                    <div class="circle large opacity60 light"></div>

                </div>
            </section>
            <section class="left-grid light large-padding dark-font">
                <div class="container light-color ">
                    <div class="content-container">
                        <?php include 'loginValidation.php' ?>
                        <div class="standard-padding">
                            <h2> Login</h2>
                        </div>

                        <div class="input-group">
                            <label for="email">Username</label>
                            <input type="text" name="username" id="username" autocomplete="off">
                        </div>
                        <div class="input-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" autocomplete="off">
                        </div>

                        <div class="btn dark ">
                            Login
                        </div>


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