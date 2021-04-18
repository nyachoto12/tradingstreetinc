<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Hosting</title>
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

            background: url(./images/Nemaribg1.png);
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
    <div class="container-fluid" style="font-family: 'Segoe UI';">
        <div class="row">
            <div style="background-color: #A47E00; " class="col-sm w3-animate-left col-md-4 col-lg-4">
                <h2 class="text-md-center text-lg-center text-uppercase text-light" style="width:100%; font-weight:bolder">Website Hosting</h2>
            </div>
        </div>
    </div>
    <br>

    <!-- image -->
    <div class="row">
        <div class="col-sm col-md-12 text-white p-5   picture col-lg d-flex justify-content-center">
            <h3 style="animation-delay: 1s;font-weight: 600;" class="display-6 animated fadeInUp">Make the world a better place through innovation.</h3>
        </div>
    </div>
    <!-- End Image -->


    <div style="font-family: 'Segoe UI';" class="container-fluid p-md-5 p-lg-5">
        <div class="row p-md-5 p-lg-5">
            <div class="col-sm col-md-8 col-lg">
                <h1 class="text-dark text-uppercase">What is Web Hosting?</h1>
                <p class="lead text-dark">
                    Web hosting is a service that gives you a place to store the files of your website.
                    In simpler terms: its a service that allows businesses/organisations or individuals to post a website or web page into the internet so that anyone who has access to the internet can view the contents of the website from wherever they might be.
                    It's basically rent in space to house your website on the world wide web

                    <span id="dots">...</span>
                    <span id="more" style="display: none;">
                        <strong style="color: #003366; ">How does Web hosting work?</strong> <br><br>
                        Your website just like any other website is hosted on a server. Website content such as CSS, HTML, images etc have to be on a server so as to be able to be viewed online.
                        A server is basically a computer that is able to connect other users of the web to your website no matter how remote they might be.
                        Web hosting service providers have this server and connectivity that allows the hosting of websites. Web hosting occurs when the files that make up the website are uploaded to the server from a local computer e.g. your laptop.

                        <strong style="color: #003366; ">Why do you need web hosting?</strong> <br><br>
                        <strong style="font-size:26px" class="ml-2 mr-3">o</strong> If the web designing process has been done and you need to go online, you need this service to store the files of you website
                        <strong style="font-size:26px" class="ml-2 mr-3">o</strong>So that the site can be accessible from anywhere in the world</span>

                    </span>
                </p>
                </span>
                </p>
                <!-- Readmore button with an onclick function-->
                <button onclick="myFunction()" id="myBtn" class="btn text-light text-uppercase rounded-0 p-2" style="background: #003366; width: 30%; ">Read more</button>

            </div>
        </div>
        <br>
        <div class="row  p-md-5 p-lg-5">
            <div class="col-sm col-md-7 col-lg">

                <h1 class="text-dark text-uppercase">Why Choose Nemari for hosting your site?</h1>
                <p>
                <ul class="lead text-dark" style="list-style-type: none;">
                    <li>
                        <p><strong>Robust service </strong>- Websites hosted on our servers are sure not to crash which is what you need for your site that has to be available 24/7.</p>
                    </li>
                    <li>
                        <p><strong>Fast access</strong> - visitors of your website prefer a website that can be quickly accessed and won't take ages to load which is what we offer at Nemari Technologies</p>
                    </li>
                    <li>
                        <p><strong>Control Panel</strong> - a control panel is available for total control of your website and for everyday maintenance of your website. Various aspects of your website can be managed from here.</p>
                    </li>
                    <li>
                        <p><strong>Technical support</strong>- our staff work around the clock to help if any technical issues arise</p>
                    </li>

                </ul>

            </div>
        </div>
    </div>
    </div>

    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
    <!-- End of Footer -->


    <script>
        function myForm() {
            var btnext = document.getElementById("fill");
            btnext.innerHTML = "Please fill the form below carefully to register your project. Thank you";
        }

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