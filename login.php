<?php
include 'env_var.php';





?>

<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin Login</title>
        <link rel="icon" type="image/x-icon" href="icons/favicon.png" />

        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

        <link href="css/styles.css" rel="stylesheet" />
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
        />
        <link hreff="css/login.css" rel="stylesheet"/>
        <script src="js/wow.min.js"></script>
        
    </head>
    <style>
        body{
            font-family: 'Lato', sans-serif;
        }
        .img-style{
            width: 25vw;
        }
    </style>
   <body id="page-top">

        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="./index#page-top">Srikant Vasudevan</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Navigation</button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./index#projects">Featured Projects</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./index#signup">Contact</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./proj">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" target="_blank" href="https://github.com/treecant">Github</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" target="_blank" href="./login">Admin Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <header class="masthead" style="background-image: url('./assets/background.png')">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase animate__animated animate__fadeInDown animate__delay-.5s">Admin Login</h1>
                </div>
            </div>
        </header>
        <center>
        <form action="login" method="post">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>
            <br>
            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="passsword" required>
            <br>
            <button type="submit" class='btn btn-primary'>Login</button>
        </form>
        <center>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <center>
            
            <footer class="footer bg-black small text-center text-white-50"><div class="container">Srikant Vasudevan 2020</div></footer>
        </center>
        <?php

            include 'env_var.php';

            //env var gets sql data and stores them as variables

            if($_POST["username"] == $adminUsername && $_POST["password"] == $adminPassword) {
                //success action
            }
            else {
                //warning action
            }


        ?>
    </body>
</html>