<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
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
    <style>
        .picture {

            background: url(./images/Nemaribg1.png);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .team {
            overflow: hidden;
            text-align: center;
            background-color: #003366;
            width: 100%;
            margin-top: 10px;
        }

        .team h2 {
            text-transform: uppercase;
            margin-bottom: 10px;
            color: #A47E00;
            text-align: center;
        }

        .team-ps {
            margin-bottom: 40px;
            background-color: #003366;
            text-align: center;
        }

        .team-ps a {
            display: inline;
            margin: 0 30px;
            height: 160px;
            overflow: hidden;
            border-radius: 50%;
        }



        .icon {
            text-align: center;
            color: #A47E00;
        }

        .team-ps img {
            width: 100%;
            filter: grayscale(100%);
            transition: 0.4s all;
        }

        .team-ps a:hover>img {
            filter: none;
        }

        .border2 {
            display: block;
            border: 0px;
            margin: auto;
            width: 300px;
            height: 5px;
            background-color: #A47E00;
            margin-bottom: 40px;
        }

        .border2 #tech {
            display: block;
            margin: auto;
            width: 300px;
            height: 5px;
            color: #A47E00;
            margin-bottom: 40px;
        }

        .border3 {
            display: block;
            border: 0px;
            margin: auto;
            width: 300px;
            height: 5px;
            background-color: #003366;
            margin-bottom: 40px;
        }

        .border3 #tech {
            display: block;
            margin: auto;
            width: 300px;
            height: 5px;
            color: #003366;
            margin-bottom: 40px;
        }

        .text {
            width: 50%;
            text-align: justify;
            margin: auto;
            color: #A47E00;
            height: 0;
            overflow: hidden;
        }

        .dev-text {
            width: 50%;
            text-align: justify;
            margin: auto;
            color: white;
            height: 0;
            overflow: hidden;
            opacity: 120%;
        }

        .text:target {
            height: auto;
        }

        .dev-text:target {
            height: auto;
        }

        .name {
            display: block;
            text-transform: uppercase;
            font-size: 20px;
            text-align: center;
            font-weight: bold;
        }

        p li {
            color: #A47E00;
            background-color: #003366;
            list-style: square;
            margin-left: 20%;
        }

        #design {
            display: none;
        }

        .dev-text .name {
            display: block;
            text-transform: uppercase;
            text-align: center;
            color: #003366;
            font-weight: bold;
        }

        .status {
            display: block;
            text-transform: uppercase;
            text-align: center;

        }

        .stat {
            display: block;

            text-transform: capitalize;
            text-align: left;

        }

        .dev-text .status {
            display: block;
            text-transform: uppercase;
            text-align: center;
            color: #003366;
        }

        .dev-text .stat {
            display: block;
            text-transform: capitalize;
            text-align: left;
            color: #003366;
        }

        /* Create three columns of equal width */
        .columns {
            float: left;
            width: 33.3%;
            padding: 8px;
        }
    </style>


</head>

<body>

    <!-- Header -->
    <?php
    include('header.php');
    ?>
    <!-- End of Header -->

    <br>
    <div class="container-fluid" style="font-family: 'Segoe UI';">
        <div class="row">
            <div style="background-color: #A47E00; " class="col-sm w3-animate-left col-md-4 col-lg-4">
                <h2 class="text-md-center text-lg-center text-uppercase con text-light" style="animation-delay: 1s;width:100%; font-weight:bolder">About Us</h2>
            </div>
        </div>
    </div>
    <br>
    <!-- Body -->
    <div style="font-family: 'Segoe UI';" class="container-fluid">
        <div class="row">
            <div class="col-sm col-md-12 text-white p-5   picture col-lg d-flex justify-content-center">
                <h3 style="animation-delay: 1s;font-weight: 600;" class="display-6 animated fadeInUp">Make the world a better place through innovation.</h3>
            </div>
        </div>
        <div class="row p-5">
            <div class="col">
                <h2 style="font-weight: 600;" class="text-uppercase">Introduction</h2>
                <p>As a technology company, we exist to solve simple and complex problems for the good of humanity and in enhancing economic development.
                    We acknowledge the power that software solutions offer to B2B customers in solving problems and making it easier to perform tasks/activities.
                    Our software solutions enhance efficiency, performance and ease of doing things in health-care, banking, and insurance. Nemari Technologies
                    believes technology is the future we are building now, and has limitless opportunities in making the world a better place Nemari Technologies
                    offers solutions in the following niche markets: start-ups, health-care, banking, and insurance.</p>
                <p> Nemari Technologies offers web and mobile based software products and services to meet B2B needs in advancing digitization and Artificial
                    intelligence systems. The mode of business is changing fast from brick-mortar to a blended model, with digitization becoming a competitive
                    advantage for most.</p>
            </div>

        </div>
        <div class="row p-5">
            <div class="col-sm col-md col-lg">
                <h2 style="font-weight: 600;" class="text-uppercase">Vision</h2>
                <p> Our Vision is to become a leading software solutions company in the world,
                    dedicated to helping Businesses solve their problems through the use of our
                    innovative products and services. In the next 10 years we want to be the
                    leading force in pioneering Artificial Intelligence systems and applications.
                    We aim to leverage on innovations to set us apart from our competitors and
                    having sound business models that guarantee our sustainability. </p>

            </div>
            <div class="col-sm col-md col-lg"> <img class="img-fluid" src="./images/Artboard 1.png" alt=""> </div>
        </div>

        <div class="row p-5">
            <div class="col">
                <h2 style="font-weight: 600;" class="text-uppercase">Mission</h2>
                <p>Our Mission is to provide innovative B2B software solutions to health-care, start-ups, Insurance and Banking industry.
                    We want to develop the artificial intelligence space and nurture the opportunities to solve problems.
                    Our goal is to build a company that attracts the brightest minds, capable of leading our mission in changing the world through technology. </p>
            </div>
        </div>
    </div>

    <div style="font-family: 'Segoe UI';" class="container-fluid">
        <div class="row justify-content-center">
            <div class="col">
                <h2 style="color: #A47E00;font-weight:600" class="text-uppercase display-6 text-center">our team</h2>
            </div>
        </div>

        <div class="row" style=" background-color: #003366;">
            <div class="team">

                <div class="team-ps">
                    <br>
                    <span class="border2"></span>
                    <a href="#p1"><img src="./images/boss1.png" alt="md" srcset="" class="rounded-circle p-3" style="width:250px"></a>
                    <a href="#p3"><img src="./images/ropa1.png" alt="marketing" srcset="" class="rounded-circle p-3" style="width:250px"></a>
                    <a href="#p2"><img src="./images/brian1.png" alt="adim" srcset="" class="rounded-circle p-3" style="width:250px"></a>

                    <div class="col text" id="p1">
                        <span class="name">Tawanda Chitando</span>

                        <span class="border2"></span>
                        <p class="text-white p-5 ">I love the potential that exists in solving the world’s problems through use of technology, and software is one way to impact millions of people.
                            I am inspired by the stories of the African pioneers who have shaped the world as we know it today, Elon Musk, Strive Masiyiwa, Vusi Thembekwayo, and Nelson Mandela. This has given me hope to believe I too can change and shape the world through my hard work and effort.
                            I love everything about software, and I believe Nemari Technologies will be in the frontier of Artificial Intelligence ,shaping the continent through smart technology.

                            My key strengths are in Leadership, Business Development, Networking, and Public speaking. I believe leadership is key in the success of any organisation, leadership inspires and nurtures.
                            I studied Entrepreneurship related course in Masters of Business Administration (2021), and look forward to add more knowledge on Data Science, Smart Technologies and Leadership .
                        </p>
                        <span class="status">Managing Director</span>
                    </div>
                    <div class="col text" id="p2">
                        <span class="name">Brian Mhaka</span>

                        <span class="border2"></span>
                        <p class="text-white p-5">Brian is an exceptional leader , who has vast skills in HR, Business development and negotiation. He is a founding member and has been vital in the Nemari journey

                            Brian is passionate about helping other people and believes in the potential Nemari has in changing the world. Brian has International corporate experience and brings to the team vast knowledge insetting up of systems and is a great resource in sustaining the business through his leadership..

                            Social Science Major in Human Resource Management Degree(GZU) Zimbabwe (2011) ,Galileo System: Airline Reservation Computer System (Windhoek) Namibia (2016)
                            Further skills: I.T. Proficiency: Microsoft projects, SPSS, E-Commerce, Project management, ATS, HR Systems, Quick Soft, GDS, GALILEO, and Amadeus.
                        </p>
                        <span class="status">Finance and Administration Director</span>
                    </div>
                    <div class="col text" id="p3">
                        <span class="name">Ropafadzo Nyikadzino</span>

                        <span class="border2"></span>
                        <p class="text-white p-5">I have the desire to attain my life time goals and learning new things. I have interest in research for emerging technologies as well as Cyber Security issues and Artificial Intelligence. This field is constantly evolving which allows me to learn new things everyday.

                            My particular love for creativity was in advertising and how companies crafted their advertising messages and ideas especially in digital marketing. Marketing keeps evolving, which pave the way to explore and learn new channels and tools. It's also a huge motivation to see results of your marketing efforts

                            I am a hardworking, self-motivated well equipped with good interpersonal relations, analytical and conceptual skills. Able to design, implement, manage and advise on ICT, logistics and marketing solutions to expand business and technical proficiencies. Developing new business networks and meet set targets, identifying and diagnosing complex system problems.
                            BTech Degree in Electronic Commerce, Certificate in Fundamentals of Digital Marketing Google
                        </p>
                        <span class="status">Digital Marketing Partner</span>
                    </div>

                </div>
            </div>
            <div class="team" style="background-color: #A47E00">
                <div class="team-ps" style="background-color: #A47E00">
                    <br>
                    <span class="border3"></span>

                    <a href="#p4"><img src="./images/artwel2.png" alt="devs" srcset="" class="rounded-circle p-3" style="width:250px"></a>
                    <a href="#p6"><img src="./images/milca1.jpg" alt="devs" srcset="" class="rounded-circle p-3" style="width:250px"></a>
                    <a href="#p5"><img src="./images/ngonie.jpg" alt="devs" srcset="" class="rounded-circle p-3" style="width:250px"></a>

                    <div class="col dev-text" id="p4">
                        <span class="name">Artwel Murimi</span>
                        <span class="border3"></span>
                        <p class="p-5">What inspires me in life is world technology the way it grows and Visual arts.

                            What I love about software is that it makes work and life more effective and productive, at the end of the day good results are produced , software solves most of our daily problems.

                            My key strengths are in software development, Visual Arts, Database and Web development.

                            <span class="stat">Bachelor of Information Technology Honours Degree.</span>
                        </p>
                        <span class="status"> Software Development Partner (Back end)</span>
                    </div>
                    <div class="col dev-text" id="p5">
                        <span class="name">Ngonidzashe Nyachoto</span>

                        <span class="border3"></span>
                        <p class="p-5">I am inspired by facing the challenges and bring ideas into solutions to solve the problems.

                            One thing I love about Software is the key to solving problems ,and is used to solve day to day problems making it easier to perform particular tasks, for instance the use of database management systems in businesses to manage the flow of data and operations to efficiently manage their business activities.

                            My strength is in programming and web designing especially using languages such as Python, PHP and Java.


                            <span class="stat">Bachelor of Information Technology Honours Degree.</span>
                        </p>
                        <span class="status">Software Developer (Back End)</span>
                    </div>
                    <div class="col dev-text" id="p6">
                        <span class="name">Milca Belinda Nyoni</span>

                        <span class="border3"></span>
                        <p class="p-5">What inspires me in life: Dreams. The ability for so many people around the world to dream and have a vision of what they want to achieve in life be it anything. The ability for people to strive hard for those dreams to become a reality through proper planning, hard work, patience, resilience, fortitude and faith that are all put in to achieve those dreams.

                            One thing I love about software is that it enables a person with the skills to make an idea become a reality in solving end user problems even those problems that the users did not know they had.

                            My key strength is I am quick to study, I learn and catch on fast for what I don't have knowledge of coupled with the desire to learn new things whenever I can.
                            I have a creative and innovative approach to problem solving, and I always look for new and better ways to solve problems.

                            <span class="stat">Bachelor of Science Honors Degree in Computer Science</span>
                        </p>
                        <span class="status"> Software Development Partner (Front, Back End)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5">
        <div class="row">
            <div class="col text-center ">
                <h3>TECHNOLOGIES USED AT NEMARI TECHNOLOGY</h3>
            </div>
        </div>
        <br>
        <div class="row justify-content-center p-5">
            <div class="col text-center">
                <marquee behavior="" direction="">
                    <span class="p-5"><i class="fab fa-5x text-info fa-css3-alt"></i></span>
                    <span class="p-5"><i style="color: #330033;" class="fab fa-5x  fa-php"></i></span>
                    <span class="p-5"><i style="color: #800080;" class="fab fa-5x  fa-bootstrap"></i></span>
                    <span class="p-5"><i class="fab fa-5x text-success fa-android"></i></span>
                    <span class="p-5"><i style="color: #ffff00;" class="fab fa-5x  fa-js"></i></span>
                    <span class="p-5"><i class="fab fa-5x text-danger fa-laravel"></i></span>
                    <span class="p-5"><i class="fab fa-5x text-warning fa-html5"></i></span>
                    <span class="p-5"><i class="fab fa-5x text-primary fa-java"></i></span>
                </marquee>


            </div>
        </div>
    </div>
    <!-- Body -->

    <!-- Footer -->
    <?php
    include('footer.php');
    ?>
    <!-- End of Footer -->

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