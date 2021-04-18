<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
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

    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- W3School Css -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- AnimateCss -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">



    <style>
        .about-picture {
            background: url(./images/vitria-industry-trends-slide-bg.jpg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .bg-black {
            background-color: #f7f7f7;
            transition: 1s;
        }

        #top1 {
            z-index: 1;
        }

        .nemari-color {
            color: #003366;
        }

        .nemari-bgcolor {
            color: #003366;
        }

        @media (max-width: 575.98px) {
            .con {
                text-align: center;
            }

            .Why-Nemari {
                padding: 20px;
            }

            .packages {
                padding: 50px;
            }

            .brand {
                width: 0%;
                height: 0%;
                visibility: hidden;
            }

            .navbar-brand {
                font-size: 20px !important;
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
                padding: 10px;
            }

            #myBtn {
                padding: 10px;
            }

            .typewrite {
                font-size: 17px
            }

            .btn1 {
                padding-top: 10px;
            }

            .first-section-org {
                padding: 10px;
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

            .typewrite {
                font-size: 17px
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

            .typewrite {
                font-size: 20px
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
            padding-bottom: 100px;
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
            text-decoration: none;
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
                text-decoration: none;
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

        /* Button Animation */

        @keyframes zoominoutsinglefeatured {
            0% {
                transform: scale(0.8, 0.8);
            }

            50% {
                transform: scale(1, 1);
            }

            100% {
                transform: scale(0.8, 0.8);
            }
        }

        .cardcontainer span {
            animation: zoominoutsinglefeatured 3s infinite;
        }

        /* Button Animation */
    </style>
    <style>
        .picture {

            background: url(./images/Nemaribg2.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }


        /* Circle Animation*/

        #container2 {
            width: 400px;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        .circle {
            border-radius: 50%;
            border: 2px solid rgb(255, 255, 255);
            width: 150px;
            height: 150px;
            position: absolute;
            opacity: 0;
        }

        .circle {
            border-radius: 50%;
            border: 2px solid rgb(255, 255, 255);
            width: 150px;
            height: 150px;
            position: absolute;
            opacity: 0;
            animation: scaleIn 4s infinite cubic-bezier(.36, .11, .89, .32);
        }

        @keyframes scaleIn {
            from {
                transform: scale(.5, .5);
                opacity: .6;
            }

            to {
                transform: scale(2.5, 2.5);
                opacity: 0;
            }
        }

        .item2 {
            z-index: 100;
            padding: 5px;
        }

        .item2 img {
            width: 150px;
        }

        .footer li a {
            text-decoration: none;
        }

        .footer li a:hover {
            text-decoration: none;
            color: #4d3b00;
            transition: 0.3s;
        }

        .terms span a {
            text-decoration: none;
        }

        .terms span a:hover {
            text-decoration: none;
            color: #4d3b00;
            transition: 0.3s;
        }

        /* End of Circle Animation*/
    </style>


</head>

<body class="">

    <!-- Header -->
    <?php
    include('header.php');
    ?>
    <!-- End of Header -->

    <br>

    <!-- Body -->
    <div class="container-fluid" style="font-family: 'Segoe UI';">
        <div class="row">
            <div style="background-color: #A47E00; " class="col-sm w3-animate-left col-md-4 col-lg-4">
                <h2 class="text-md-center text-lg-center text-uppercase con text-light" style="width:100%;animation-delay: 1s; font-weight:bolder">CONTACT US</h2>
            </div>
        </div>
    </div>

    <br>
    <!-- Form Section -->
    <div class="container-fluid">

        <div class="row no-gutters">
            <div class="col-sm col-md-6 text-white picture col-lg-6">

                <div class="p-5">
                    <h1 style="animation-delay: 1s;" class="text-uppercase  animated fadeInUp"><strong>contact info</strong></h1>
                    <br>
                    <p><span style="font-size: 20px;">Call Us</span>
                    <h3 class="lead p-0 m-0">Brian: (+263 773721760)</h3>
                    <h3 class="lead p-0 m-0"> Tawanda : (+263775 936 424) </h3>
                    </p>
                    <p><span style="font-size: 20px;">Email Us</span>
                    <h3 class="lead p-0 m-0">sales@nemari.co.zw</h3>
                    <p>
                    <p><span style="font-size: 20px;">Follow Us On</span></p>
                    </p>

                    <div class="container-fluid m-0 p-0">
                        <div class="row m-0 p-0 ">
                            <div class="col-lg-12 m-0 p-0 text-white">

                                <span><i class="fab  fa-2x fa-linkedin"></i>&ensp;</span>
                                <span><i class="fab  fa-2x fa-facebook"></i>&ensp;</span>
                                <span><i class="far  fa-2x fa-envelope"></i>&ensp;</span>

                            </div>
                        </div>
                    </div>
                </div>

            </div>



            <div style="font-family: 'Segoe UI';" class="col-md-6 bg-dark">
                <div class="container">
                    <div class="row justify-content-end ">
                        <div style="background: #003366;" class="col-sm col-md col-lg-6 text-center text-white">
                            <h2 class=" animated fadeInUp " style="font-weight: 600;animation-delay: 1s;">Drop Message</h2>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-sm col-md col-lg p-5">
                            <form action="mail.php" method="POST" class="">
                                <label for="name" style="color:#A47E00;font-weight:normal;" class="">Full Name/Organization Name</label>
                                <div class="form-group">
                                    <input type="text" class="form-control text-white rounded-0 bg-dark w3-border w3-border-dark-gray" name="firstname" id="" aria-describedby="firstname" placeholder="Enter your name">
                                </div>


                                <label for="name" style="color:#A47E00;font-weight:normal;" class="">Email</label>
                                <div class="form-group">
                                    <input type="text" class="form-control text-white rounded-0 bg-dark w3-border w3-border-dark-gray" name="email" id="" aria-describedby="email" placeholder="Enter your email address">
                                </div>


                                <label for="name" style="color:#A47E00;font-weight:normal;" class="">Phone Number</label>
                                <div class="form-group">
                                    <input type="text" class="form-control text-white rounded-0 bg-dark w3-border w3-border-dark-gray" name="phone" id="" aria-describedby="phone" placeholder="Enter your phone number">
                                </div>


                                <label for="name" style="color:#A47E00;font-weight:normal;" class="">Message</label>
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="100" rows="4" class="form-control text-white rounded-0 bg-dark w3-border w3-border-dark-gray" placeholder=" Tell us about your business"></textarea>
                                </div>


                                <button type="submit" name="submit" id="" class="btn rounded-0 p-2 text-uppercase w-50 text-light" style="background: #003366;font-size: 20px;">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Form Section -->
    <!-- End of Body -->
    <br>
    <br>
    <br>
    <!-- Google-Map -->
    <div class="container-fluid p-lg-5 p-md-5">
        <div class="row">
            <div class="col-lg-7">
                <div id="googleMap" style="width:100%;height:400px;"></div>
            </div>
            <div class="col p-5 text-center">
                <br>
                <h3 style="color: #003366;font-weight: bolder;">NemariTech</h3>
                <p>Make the world a better place through innovation.</p>
            </div>
        </div>
    </div>
    <!-- Google-Map -->


    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
    <!-- End of Footer -->


    <!-- Google-Map -->
    <script>
        function myMap() {
            var mapProp = {
                center: new google.maps.LatLng(-17.82772, 31.05337),
                zoom: 10,
            };
            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDASzQCqrjb3CxoN8-4xArpEff4yxR3qCU&region=ZW&callback=myMap"></script>
    <!-- End of Google-Map -->
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