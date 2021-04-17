<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Srikant Vasudevan</title>
        <link rel="icon" type="image/x-icon" href="icons/favicon.png" />

        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

        <link href="css/styles.css" rel="stylesheet" />
        <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
        />
        <script src="js/wow.min.js"></script>
        
    </head>
    <style>
        body{
            font-family: 'Lato', sans-serif;
        }
        .img-style{
        	width: 15vw;
            margin: 0px auto;
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
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="./proj">Projects</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" target="_blank" href="https://github.com/treecant">Github</a></li> 
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="http://blog.srikantv.com">Blog</a></li>
                  </ul>
                </div>
            </div>
        </nav>

        <header class="masthead" style="background-image: url('./assets/portfolio-bg.png')">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase animate__animated animate__fadeInDown animate__delay-.5s">Projects</h1>
                </div>
            </div>
        </header>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <script src="js/scripts.js"></script>
        <script>
            function createCookie(name, value, days) { 
                var expires; 
                  
                if (days) { 
                    var date = new Date(); 
                    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
                    expires = "; expires=" + date.toGMTString(); 
                } 
                else { 
                    expires = ""; 
                } 
                  
                document.cookie = escape(name) + "=" +  
                    escape(value) + expires + "; path=/"; 

                window.location.href="./viewer"
            } 
        </script>
        <center>
            <?php

                //get environment variables
                include 'env_var.php';

                $idNum = $_COOKIE["id"];
                // Create connection
                $conn = new mysqli($server_name, $db_user, $db_password, $db_name);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $result = $conn -> query("SELECT * FROM projects");
                $rows = $result -> num_rows;
                
                for ($x = 0; $x < $rows; $x++){
                    $getresult = $conn -> query("SELECT projname, description, imgpath, link FROM projects WHERE id = $x");
                    $num = mysqli_fetch_assoc($getresult);
                    $name = $num["projname"];
                    $des = $num["description"];
                    $path = $num["imgpath"];
                    $link = $num["link"];

            ?>
                    <br>
                    <div class='card' style='width:70%; padding: 10px;'>
                        <img class='card-img-top img-style' src= <?php echo $path; ?> alt='Card image'>
                        <div class='card-body'>
                            <h4 class='card-title'><?php echo $name; ?></h4>
                            <p class='card-text'><?php echo $des ?></p>
                            <button id = <?php echo $x; ?> class='btn btn-primary' onclick='createCookie("id", this.id, 100)'>View Project</button>
                        </div>
                    </div>
                    <br>

            <?php        
                }
            ?>

            <footer class="footer bg-black small text-center text-white-50"><div class="container">Srikant Vasudevan 2020</div></footer>
        </center>

    </body>
</html>