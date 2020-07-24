<!DOCTYPE html>
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
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
        <link href="css/viewer.css" rel="stylesheet" />
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
        .btn-primary{
            font-size: 30px;
            width: 70vw;
        }

    </style>
   <body id="page-top">

        <?php
            //get environment variables
            include 'env_var.php';

            $idNum = $_COOKIE["id"];
            // Create connection
            $conn = new mysqli($server_name, $db_user, $db_password, $db_name);

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
                echo "Connection failed";
            }

            $getresult = $conn -> query("SELECT projname, description, imgpath, link FROM projects WHERE id = $idNum");
           	$num = mysqli_fetch_assoc($getresult);
            $name = $num["projname"];
            $des = $num["description"];
            $path = $num["imgpath"];
            $link = $num["link"];

         ?>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="./index">Srikant Vasudevan</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Navigation</button>
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

        <header class="masthead" style="background-image: url('./assets/portfolio-bg.png'); height: 50vh">
            <div class="container d-flex h-100 align-items-center">
                <div class="mx-auto text-center">
                    <h1 class="mx-auto my-0 text-uppercase animate__animated animate__fadeInDown animate__delay-.5s"><?php echo $name; ?></h1>
                </div>
            </div>
        </header>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <script src="js/scripts.js"></script>


            	<div style="padding: 20px">
                <div id="content"></div>
            	</div>


            <footer class="footer bg-black small text-center text-white-50"><div class="container">Srikant Vasudevan 2020</div></footer>
            <?php
				if(strpos($link, '.pdf') !== false){
			?>
    		<script>
    			document.getElementById("content").innerHTML = '<iframe src= <?php echo $link ?>  class="pdf_frame" ></iframe>';
    		</script>
    		<?php
				} 

				elseif (strpos($link, 'https://github.com') !== false){
					$relink = explode("https://github.com", $link, 2);
					$readmeLink = "https://raw.githubusercontent.com" . $relink[1] . "/master/README.md";
			?>
			<script>
			var link = <?php echo json_encode($readmeLink); ?>;
			</script>
    		<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
    		<script> 
	    		(async ()=>{
	    			var response=await fetch(link);
	    			switch (response.status){
	    				case 200: 
	    					var template=await response.text();
	    					document.getElementById("content").innerHTML = marked(template) + '<br><br><p>To view the project in github, visit this <a target="_blank" href= <?php echo $link; ?>>link</a></p>';
	    					break; 
	    				case 404:
	    					document.getElementById("content").innerHTML = "Unable to display README";
	    					break;
	    			}
	    		})();
    		</script>
    		<?php
				} 
				elseif (strpos($link, 'https://www.youtube.com') !== false){
				$relink = explode("https://www.youtube.com/watch?v=", $link, 2);
				$embedLink = "https://youtube.com/embed/" . $relink[1];
			?>
			<script>
				document.getElementById("content").innerHTML = '<div class="video_wrapper"><iframe class="video_frame" src= <?php echo $embedLink; ?>></iframe><br><br><p>To view the video on youtube, visit this <a target="_blank" href= <?php echo $link; ?>>link</a></p></div>'
			</script>
			<?php
				}
				else{
			?>
                <script>
                    document.getElementById("content").innerHTML = "Can't display this project"
                </script>
            <?php
                }
			?>
    </body>
</html>