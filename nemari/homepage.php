<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nemari Technologies</title>
    <!--Bootsrap 4 CDN-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--Bootstrap Css-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="./js/all.js"></script>
    <!-- MainCss -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- W3School Css -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- AnimateCss -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">


    <!-- Main Css -->
    <style>
        .bg-black {
            background-color: #f7f7f7;
            transition: 1s;
        }

        #top1 {
            z-index: 1;
        }

        @media (max-width: 575.98px) {
            .brand {
                width: 0%;
                height: 0%;
                visibility: hidden;
            }

            .navbar-brand {
                font-size: 20px !important;
            }

            .navbar-toggler {
                width: 40px !important;
                height: 30px !important;
                padding: 0px !important;
            }

            .navbar-toggler-icon {
                width: 20px !important;
                height: 20px !important;
            }

            #empty_footer {
                visibility: none;
                display: none;
            }

            #d_footer h3 {
                font-size: 17px !important;
                font-weight: bold;
            }

            #d_footer {
                padding: 50px;
                padding-bottom: 0px;
            }

            #mail_footer {
                font-size: small !important;
                padding: 50px;
                padding-top: 0px;
            }

            #mail_footer h5 {
                font-size: 17px !important;
                font-weight: bold;
            }

            .extra-sm {
                padding-right: 20px;
                padding-top: 10px;
            }

            .md-sm span a {
                font-size: 12px;
            }

            .md2-sm span {
                font: size 12px;
            }

            .first-section {
                padding: 50px;
                margin: 50px;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            .navbar-brand {
                font-size: 20px !important;
            }

            .navbar-inverse .navbar-brand {
                font-size: 30px;
                padding: 20px 15px;
            }

            .carousel-caption {
                padding-bottom: 120px;
            }

            .carousel-caption h2 {
                font-size: 25px;
            }

            .carousel-caption h3 {
                font-size: 18px;
            }

            .carousel-caption a {
                padding: 10px 25px;
            }

            #empty_footer {
                visibility: none;
                display: none;
            }

            #d_footer h3 {
                font-size: 17px !important;
                font-weight: bold;
            }

            #d_footer {
                padding: 30px;
                margin-left: 100px;
                padding-bottom: 0px;
            }

            #mail_footer {
                font-size: small !important;
                padding: 50px;
                padding-right: 40px;
                margin-top: 20px;
                padding-bottom: 0px;
                text-align: center;
            }

            #mail_footer h5 {
                font-size: 17px !important;
                font-weight: bold;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .navbar-brand {
                visibility: hidden;
            }

            .brand {
                width: 100%;
                height: 60px;
            }

            #empty_footer {
                visibility: none;
                display: none;
            }

            #d_footer h3 {
                font-size: 17px !important;
                font-weight: bold;
            }

            #d_footer {
                padding: 30px;
                margin-left: 100px;
                padding-bottom: 0px;
            }

            #mail_footer {
                font-size: small !important;
                padding: 50px;
                margin-top: 20px;
                padding-bottom: 0px;
            }

            #mail_footer h5 {
                font-size: 17px !important;
                font-weight: bold;
            }
        }

        @media (min-width: 992px) and (max-width: 1199.98px) {
            .navbar-brand {
                visibility: hidden;
            }

            .brand {
                width: 100%;
                height: 60px;
            }

            .nav-item {
                padding: 10px;
            }

            /* #empty_footer {
                visibility: none;
                display: none;
            }*/
            #d_footer h3 {
                font-size: 17px !important;
                font-weight: bold;
            }

            /* #d_footer {
                padding: 50px;
            }*/
            /*#mail_footer {
                font-size: small !important;
                padding: 50px;
            }*/
            #mail_footer h5 {
                font-size: 17px !important;
                font-weight: bold;
            }
        }

        @media (min-width: 1200px) {
            .navbar-brand {
                visibility: hidden;
            }

            .brand {
                width: 100%;
                height: 60px;
            }

            .nav-item {
                padding: 12px;
            }
        }

        .custom-toggler .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(10, 22, 106)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }

        .custom-toggler.navbar-toggler {
            border-color: #003366;
        }

        .navbar-toggler {
            width: 40px !important;
            height: 30px !important;
            padding: 0px !important;
        }

        .navbar-toggler-icon {
            width: 20px !important;
            height: 20px !important;
        }

        nav .nav-link {
            color: #003366 !important;
        }

        nav .nav-link:hover {
            color: #A47E00 !important;
            transition: 0.3s;
        }

        .active {
            border-bottom: 3px solid #003366;
        }

        .carousel-caption {
            padding-bottom: 300px;
            font-family: poppins;
        }

        .carousel-caption h2 {
            font-size: 70px;
            text-transform: uppercase;
            font-weight: bold;
        }

        .carousel-caption h2 span {
            color: #EDBB00;
        }

        .carousel-caption a {
            background: white;
            padding: 15px 35px;
            display: inline-block;
            margin-top: 20px;
            color: #003366;
            text-transform: uppercase;
            border-radius: 25px;
            font-weight: bolder;
            text-shadow: none;
        }

        .carousel-control.right {
            background-image: none;
        }

        .carousel-control.left {
            background-image: none;
        }

        .carousel-indicators .active {
            background-color: white;
            border-color: white;
        }

        /*responsive css*/

        @media only screen and (min-width: 768px) and (max-width: 991px) {
            .carousel-caption {
                padding-bottom: 100px;
            }

            .carousel-caption h2 {
                font-size: 50px;
            }
        }

        @media only screen and (max-width: 767px) {
            .navbar-inverse .navbar-brand {
                font-size: 30px;
                padding: 20px 15px;
            }

            .carousel-caption {
                padding-bottom: 120px;
            }

            .carousel-caption h2 {
                font-size: 25px;
            }

            .carousel-caption h3 {
                font-size: 18px;
            }

            .carousel-caption a {
                padding: 10px 25px;
            }
        }

        .banner {
            -webkit-background-size: cover;
            background-size: cover;
            background-position: center center;
            background-repeat: no-repeat;
            height: 500px;
        }

        .carousel-inner .item {
            height: 500px;
        }
    </style>
    <!-- End Main Css -->

</head>

<body>


    <!-- Header -->
    <?php
    include('header.php');
    ?>
    <!-- End of Header -->


    <!-- SlideShow -->

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <div class="banner" style="background-image: url(./images/download-9-w855h425@2x.jpg);"></div>
                <div class="carousel-caption">

                    <h2 class="animated bounceInRight text-left" style="animation-delay: 1s">Website Design</h2>
                    <h3 class="animated bounceInLeft text-left bg-white p-3 pl-5 w-75" style="animation-delay: 2s;color: #003366 !important;text-shadow: none;">We offer you from as little as $50USD &ensp;<span style="border-right: 2px solid #003366;"></span> </h3>
                    <p class="animated bounceInLeft p-0 text-left" style="animation-delay: 2s;">4 Paged Website</p>
                    <p class="animated bounceInLeft p-0 text-left" style="animation-delay: 2s;">Free Domain Name</p>
                    <p class="animated bounceInLeft p-0 text-left" style="animation-delay: 2s;">1 Year Free Hosting</p>
                    <p class="animated bounceInRight text-left" style="animation-delay: 3s"><a href="#">Order Now</a></p>
                </div>
            </div>
            <div class="item">
                <div class="banner" style="background-image: url(./images/884393.jpg);"></div>
                <div class="carousel-caption">
                    <h2 class="animated slideInDown" style="animation-delay: 1s">We Are <span class="bg-white pl-5 pr-5" style="color:#003366 !important;">Nemari</span></h2>
                    <h3 class="animated fadeInUp" style="animation-delay: 2s">Feel free to contact us, its our duty to work for you.</h3>
                    <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">Contact us</a></p>
                </div>
            </div>
            <div class="item">
                <div class="banner" style="background-image: url(./images/1105009.png);"></div>
                <div class="carousel-caption">
                    <h2 class="animated zoomIn" style="animation-delay: 1s">Website <span>Hosting</span></h2>
                    <h3 class="animated fadeInLeft p-3 pl-5  bg-white" style="animation-delay: 2s;color: #003366 !important;text-shadow: none;">We offer you from as little as $3.50 USD/ month</h3>
                    <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">Order Now</a></p>
                </div>
            </div>
            <div class="item">
                <div class="banner" style="background-image: url(./images/wallpaperflare.com_wallpaper.jpg);"></div>
                <div class="carousel-caption">
                    <h2 class="animated bounceInLeft" style="animation-delay: 1s">We Are <span>Diligent</span></h2>
                    <h3 class="animated fadeInUp" style="animation-delay: 2s">Web Design and Development Agency</h3>
                    <p class="animated zoomIn" style="animation-delay: 3s"><a href="#">Contact us</a></p>
                </div>
            </div>


        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- End Of SlideShow -->


    <!-- 1st section -->
    <div style="font-family: 'Segoe UI';" class="container-fluid first-section p-sm-4 m-sm-4 p-md-5 m-md-5 p-lg-5 m-lg-5">
        <!-- Row for placing the column with our text -->
        <div class="row">
            <div class="col-sm col-md col-lg">
                <div class="">
                    <p style="font-size: 20px;font-weight: lighter;" class="text-uppercase m-0 text-dark">WE OFFER YOU GREAT WEBSITES</p>
                    <p class="text-uppercase mb-1" style="color: #003366;font-size: 25px;">NEMARI TECHNOLOGIES WEBSITE DESIGN COMPANY</p>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-sm col-md col-lg-7">
                <p style="font-size: 20px;font-weight: lighter;">Nemari Technologies exists to solve simple and complex problems
                    in enhancing economic development.We acknowledge the power
                    that software solutions offer to B2B customers in solving problems
                    and making it easier to perform tasks/activities.<span id="dots"> &ensp;...</span>
                    <span id="more" style="display: none;transition: 0.4s;">
                        <br>
                        Our software solutions enhance efficiency, performance and ease of doing things in health-care, banking, and insurance.
                        Nemari Technologies believes technology is the future we are building now, and has limitless opportunities in making the world a better place. <br> <br> Nemari Technologies offers solutions in the following niche markets: start-ups, health-care, banking, and insurance.
                        Nemari Technologies offers web and mobile based software products and services to meet B2B needs in advancing digitization and Artificial intelligence systems.
                        The mode of business is changing fast from brick-mortar to a blended model with digitization becoming a competitive advantage for most.
                    </span>
                </p>
                <!-- Readmore button with an onclick function-->
                <button onclick="myFunction()" id="myBtn" class="btn text-light rounded-0 p-3" style="background: #003366; width: 30%; ">Read more</button>
            </div>
        </div>
    </div>
    <!-- end of 1st section -->























































































    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
    <!-- End Of Footer -->
    <!-- TopBar -->
    <script>
        $(function() {
            var header = $(".clearHeader");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 100) {
                    document.getElementById("top1").style.position = "fixed";
                    header.removeClass('clearHeader').addClass("bg-black");


                } else {
                    header.removeClass("bg-black").addClass('clearHeader');
                    document.getElementById("top1").style.top = "0px";
                    document.getElementById("top1").style.position = "relative";
                }
            });
        });
    </script>
    <!-- End of TopBar -->
    <!-- Below is javascript code for readmore and readless functionality-->
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script>
    <!-- End of Below is javascript code for readmore and readless functionality-->
    <!--JQuery-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>

    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!--Bootstrap JavaScript-->
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>