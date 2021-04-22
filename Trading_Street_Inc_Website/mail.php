<?php

if (isset($_POST["submit"])) {

    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $headers =  'MIME-Version: 1.0' . "\r\n";
    $headers .= 'From:' .  $email . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $to = 'developers@nemari.co.zw';
    $subject = 'Customer Request to Nemari Technologies';
    $content = "Name : " . $name . "\n" . "Phone Number:" . $phone . "\n" . "Customer Email Address :" . $email . "\n" . "Wrote to you the following : " . "\n\n" . ".$message.";
}

?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trading Street Inc| Home</title>
    <!--Bootsrap 4 CDN-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--Bootstrap 5 Css-->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- Font Awesome -->
    <script src="./js/all.js"></script>

    <!-- MainCss -->
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- W3School Css -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- AnimateCss -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="" href="css/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- Fonts Family -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/scrolling-nav.css" rel="stylesheet">

    <!-- Slideshow JSQ -->
    <link rel="stylesheet" href="css/jquery.carousel-line-arrow.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">

    <!-- Cards Order -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <!-- AnimateCss -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.6.2/animate.min.css" rel="stylesheet">

    <!-- Border-Css -->
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <link rel="stylesheet" href="./css/footer.css">

    <style>
        .header {
            background-color: #00d2ff;
        }

      
        /*First Header Style*/

        .ff-header {
            font-family: 'Roboto', sans-serif;
            font-weight: 400;
        }

        .about-picture {
            background: url(./images/homesticky.jpeg);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .ff-header2 {
            font-family: 'Roboto', sans-serif;
            font-weight: 300;
        }

        .ff-header3 {
            font-family: 'Roboto', sans-serif;
        }

        .ff-header4 {
            font-family: 'Roboto', sans-serif;
            font-weight: 700;
        }

        .info-bg {
            background-color: #17A2B8;
        }

        .info-color {
            color: #17A2B8;
        }

        /*End First Header Style*/
        /*Second Header*/

        .navbar {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            background-color: #ABCDEF;
        }

        .navbar ul {
            list-style-type: none;
            /*to remove bullets*/
            text-align: center;
            padding: 0px;
            zoom: 1;
            overflow: hidden;
        }

        .navbar li {
            padding: 2px;
            width: 100px;
            display: inline-block;
        }

        .navbar .navbar-nav .nav-link {
            color: #343a40 !important;
        }

        .navbar .nav-item.active .nav-link,
        .navbar .nav-item:hover .nav-link {
            color: #17A2B8 !important;
        }

        /*End Of Second Header*/
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
        <div class="col-sm w3-animate-left bg-success col-md-4 col-lg-4">
            <h2 class="text-md-center text-lg-center text-uppercase con text-light" style="width:100%;animation-delay: 1s; font-weight:bolder">Hooray!!!</h2>
        </div>
    </div>
</div>

<br>
<!-- Form Section -->
<div class="container-fluid">

    <div class="row no-gutters">
        <div class="col-sm col-md-6 alert alert-success col-lg">

            <?php
            if (mail($to, $subject, $content, $headers)) {
                echo "<h1> Message sent successfully. Thank you. " . " " . $name . ", We will contact you shortly. </h1>";
            }
            echo "<h1>Hello World to everyone in zimbabwe.</h1>";

            ?>

        </div>
    </div>
</div>
<!-- End of Form Section -->
<!-- End of Body -->
<br>
<br>
<br>



<!-- Footer -->
<?php
include('footer.php');
?>
<!-- End of Footer -->
</body>