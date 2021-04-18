<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        .bg-black {
            background-color: #ffffffaf;
            color: white !important;
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


        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            .navbar-brand {
                font-size: 20px !important;
            }

            .navbar-inverse .navbar-brand {
                font-size: 30px;
                padding: 20px 15px;
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


        /* Button Animation */
    </style>



</head>

<body class="">

    <!-- Header -->





    <header id="top1" class="clearHeader w-100">


        <div style="background-color: #003366 ; box-shadow: 0 5px 5px rgba(0, 0, 0, 0.4);" class="p-3 container-fluid">
            <div class="row ">
                <div class="col-lg-12 d-flex text-white justify-content-center">

                    <span><i style="font-size: 20px;" class="fab fa-whatsapp"></i></span>
                    <span class="pl-3"><i style="font-size: 20px;" class="fab  fa-facebook"></i></span>
                    <span class="pl-3"><i style="font-size: 20px;" class="far  fa-envelope"></i></span>

                </div>
            </div>
        </div>


        <nav class="navbar rounded-0 navbar-expand-md m-0 pt-0 pb-0 w-100   navbar-light">

            <!-- first navigation -->
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                <ul class="navbar-nav mr-auto">
                    <li style="padding-left: 100px;" class="nav-item">
                        <a class="" href="#">
                            <img class="brand" src="./images/nemari logo 2.svg" alt="">
                        </a>
                    </li>
                </ul>
            </div>

            <!-- brand -->
            <div class="mx-auto order-0">
                <a class="navbar-brand  mx-auto" href="#"> <strong style=" color: #003366 !important;">Nemari <b style=" color: #A47E00 !important;">Technologies</b> </strong>
                </a>
            </div>

            <!-- toggle button for navigations -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- second navigation -->
            <div style="font-family:helvetica;" class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">Home</a>
                    </li>
                    <li class="nav-item dropdown show">
                        <a class="nav-link" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Services</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="web_design.php">Website Design</a>
                            <a class="dropdown-item" href="web_hosting.php">Website Hosting</a>
                            <a class="dropdown-item" href="software_services.php">Software Development</a>
                            <a class="dropdown-item" href="mobile_services.php">Mobile Development</a>
                        </div>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    <!--End Header -->



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