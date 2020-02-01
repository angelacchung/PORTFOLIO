
<?php

//perform a delete on a record
//receive id of record to delete.

$id = $_POST["id"];

//perform database delete using form values;
$dsn = "mysql:host=localhost;dbname=angetqwk_portfolio;charset=utf8mb4";
$dbusername = "angetqwk_mc13md";
$dbpassword = "*;h1g7yo66xp";


$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("SELECT * FROM `projects`");

$stmt->execute();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <!--  -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- css -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/new_css.css">
    <!-- <link rel="stylesheet" href="css/new_mq.css"> -->
    <title>UX/UI Designer Angela Chung👋</title>
    <!-- - -- - html5.js for IE less than 9 -- - -- - >
<!-- - -- - [if lt IE 9]>
<script
src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-- - -- - >
<!-- - -- - css3-- - mediaqueries.js for IE less than 9 -- - -- - >
<!-- - -- - [if lt IE 9]>
<script src="http://css3-- - mediaqueries-- - js.googlecode.com/svn/trunk/css3-- -
mediaqueries.js"></script>
<![endif]-- - --->
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- put this instead your html document head tags -->

    <link rel="shortcut icon" href="images/profile_icon.ico" type="image/x-icon" />

    <!-- for Google -->
    <meta name="description" content="Angela is a UX Designer + Illustrator based near the Toronto area" />
    <meta name="keywords"
        content="UX Designer, User Experience, Illustrator, Designer, Toronto, UX/UI, UX/UI Designer, Visual Designers" />
    <meta name="author" content="Angela Chung" />
    <link rel="author" href="https://plus.google.com/u/0/115117216892268610399">
    <meta name="copyright" content="2019" />


    <!-- for Facebook -->
    <meta property="og:title" content="Angela Chung - UX Designer" />
    <meta property="og:url" content="file:///D:/IMM/RESP-RESUME/angelachung-resume.html" />
    <meta property="og:type" content="UX Design portfolio website" />
    <meta property="og:description" content="Angela Chung is a UX Designer + Illustrator based near the Toronto area" />
    <meta property="og:image"
        content="http://chunmini.dev.fast.sheridanc.on.ca/responsive-resume/RESP-RESUME/RESP-RESUME/images/fb.png" />
    <!-- Facebook recommended: 1200 x 630 - ideal: 1200 x 1200 square image -->


    <!-- for Twitter -->
    <meta name="twitter:card" content="Angela Chung is a UX Designer + Illustrator based near the Toronto area" />
    <meta name="twitter:title" content="Angela Chung UX Designer" />
    <meta name="twitter:description"
        content="Angela Chung is a UX Designer and Illustrator based near the Toronto area. She has a solid background in illustration
and graphic design; a skillset that she developed from her undergraduate education at OCAD University. She is currently working towards a 
post-graduate education at Sheridan College, where she is learning about UX/UI design and full-stack web development. She is currently looking for an internship
or junior position in UX design. Angela is passionate about design and is a fan of coffee and tacos, though she would not eat them together.  " />
    <meta name="twitter:url" content="https://twitter.com/_angelachung" />
    <meta name="twitter:image"
        content="http://chunmini.dev.fast.sheridanc.on.ca/responsive-resume/RESP-RESUME/RESP-RESUME/images/twit.png" />
</head>


<body>
    <!-- Garbage code made by Angela Chung  -->
    <header id="navbar" class=" p-1 sticky-top">
        <div class="container mt-0">
            <nav class="navbar navbar-expand-lg  p-1 navbar-light">
                <a href="https://www.angelachung.me">
                    <svg id="logo" class="m-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60.04 123.54">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill: #2b2b2b;
                                }
                            </style>
                        </defs>
                        <title>Homepage</title>
                        <g id="Layer_2" data-name="Layer 2">
                            <g id="Layer_1-2" data-name="Layer 1">
                                <path class="cls-1"
                                    d="M49.63,63.13,42.74,47.49H18.68l-7,15.64H1.26L30.67,0,60,63.13ZM22.33,39.28H39.26L33,25.43c-.36-.89-.74-1.9-1.12-3.05s-.78-2.43-1.17-3.84c-.33,1.33-.68,2.57-1.05,3.71s-.76,2.21-1.14,3.18Z" />
                                <path class="cls-1"
                                    d="M51.39,76a30.31,30.31,0,0,0-8.85-5.35,27.21,27.21,0,0,0-9.81-1.78q-10,0-16.2,6.38T10.29,91.76q0,9.84,6.07,16.22a20.25,20.25,0,0,0,15.33,6.39A28,28,0,0,0,42,112.46a32.67,32.67,0,0,0,9.35-5.76v11.15a29.11,29.11,0,0,1-8.67,4.28,35.09,35.09,0,0,1-10.16,1.41,35.48,35.48,0,0,1-12.88-2.28,30.3,30.3,0,0,1-17.21-17,34.25,34.25,0,0,1,0-25.14,30.16,30.16,0,0,1,6.9-10.3A30.53,30.53,0,0,1,19.66,62a34.35,34.35,0,0,1,12.65-2.3A33.19,33.19,0,0,1,42.52,61.3,35.61,35.61,0,0,1,51.93,66Z" />
                                <path class="cls-1"
                                    d="M33.54,105a6,6,0,0,1-6-6h2.8a3.19,3.19,0,0,0,6.38,0h2.8A6,6,0,0,1,33.54,105Z" />
                                <rect class="cls-1" x="31.78" y="90.52" width="2.8" height="3.89" />
                                <circle class="cls-1" cx="21.02" cy="89.11" r="4.22" />
                                <circle class="cls-1" cx="46.34" cy="89.11" r="4.22" />
                            </g>
                        </g>
                    </svg>
                </a>

                <button class="navbar-toggler border-0" type="button" data-toggle="collapse"
                    data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="justify-content-end collapse navbar-collapse navSize" id="navbarTogglerDemo02">
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                            <a class="nav-link" href="https://www.angelachung.me">UX/UI</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="resume.html">Resume</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://www.instagram.com/mini.juung/"
                                target="_blank">Illustrations</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container mb-4">
            <div id="header" class="row">
                <div class="col-sm-6" id="pitchMargin">
                    <h1 class="outlineTitle"><span class="outline">Hi, I'm </span>Angela<span role="image"
                            aria-label="wave hand">👋</span></h1>
                    <p id="tagline" class="mb-4">
                    <?php echo($row["title"]);?></p>

                    <!-- <a href="#" class="button">
                        View Resume

                    </a> -->
                </div>
                <div class="col-sm-6 mt-2">
                    <img src="img/gif.gif" class="img-fluid">
                </div>



            </div>
            <?php
    while($row=$stmt->fetch())
    {
    ?>
            <!-- END HEADER -->
            <div id="projects">
                <p id="work">WORK</p>
                <div class="row">
                    <div class="col-sm-6">
                        <img src="img/Better1/Frame 44.png" class="img-fluid">
                    </div>
                    <div class="col-sm-6">
                        <h3 class="mt-0 mb-1"><?php echo($row['title']);?></h3>
                        <h5 class='projCat mt-3'>UX/UI</h5>
                        <!-- <p class="projCat ">UX/UI</p> -->
                        <p>Description</p>
                        <a href="#">
                            <p class="readProj">Read Project
                                <i class="material-icons">
                                    arrow_forward</i>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- END CONTAINER -->
        </div>
        <?php
    }
      ?>
    </main>

    <!--FOOTER  -->
    <footer class="pb-5">

        <!-- Footer Elements -->
        <div class="container">

            <!-- Grid row-->
            <div class="row">
                <div class="col-md-12 text-center mt-4">
                    <!-- <img src="img/white.png"> -->
                    <h3 class="mt-3">Let's connect</h3>
                    <h3 class="m-1">🤝</h3>

                </div>
                <!-- Grid column -->
                <div class="col-md-8 offset-md-2 mt-3 text-center">
                    <div class="mb-3 ml-5">

                        <!-- Twitter -->
                        <a class="tw-ic socialIcon" target="_blank" href="https://twitter.com/_angelachung">
                            <i class="fab fa-twitter fa-lg white-text mr-5 fa-2x"> </i>
                        </a>

                        <!--Linkedin -->
                        <a class="li-ic socialIcon" target="_blank" href="https://www.linkedin.com/in/angelamchung/">
                            <i class="fab fa-linkedin-in fa-lg white-text mr-5 fa-2x"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic socialIcon" target="_blank" href="https://www.instagram.com/angela.jung/">
                            <i class="fab fa-instagram fa-lg white-text mr-5 fa-2x"> </i>
                        </a>

                    </div>
                    <div class="mt-4">
                        <a class="button" href="mailto:mini.cchung@gmail.com">Mail me</a>
                    </div>
                    <!-- <p class="text-muted mt-5">Website coded by Angela Chung</p> -->
                </div>
                <!-- Grid column -->

            </div>

        </div>

    </footer>
    <!-- END FOOTER -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>