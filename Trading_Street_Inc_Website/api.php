<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "funderslist";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




$limit = isset($_POST["limit-records"]) ? $_POST["limit-records"] : 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

if (isset($_POST['asc'])) {
    $result = $conn->query("SELECT * FROM f_list  ORDER BY funder ASC LIMIT $start, $limit");
    $customers = $result->fetch_all(MYSQLI_ASSOC);

    $result1 = $conn->query("SELECT count(id) AS id FROM f_list");
    $custCount = $result1->fetch_all(MYSQLI_ASSOC);
    $total = $custCount[0]['id'];
    $pages = ceil($total / $limit);

    $Previous = $page - 1;
    $Next = $page + 1;
} else if (isset($_POST['desc'])) {
    $result = $conn->query("SELECT * FROM f_list  ORDER BY funder DESC LIMIT $start, $limit");
    $customers = $result->fetch_all(MYSQLI_ASSOC);

    $result1 = $conn->query("SELECT count(id) AS id FROM f_list");
    $custCount = $result1->fetch_all(MYSQLI_ASSOC);
    $total = $custCount[0]['id'];
    $pages = ceil($total / $limit);

    $Previous = $page - 1;
    $Next = $page + 1;
} else if (isset($_POST['normal'])) {

    $result = $conn->query("SELECT * FROM f_list LIMIT $start, $limit");
    $customers = $result->fetch_all(MYSQLI_ASSOC);

    $result1 = $conn->query("SELECT count(id) AS id FROM f_list");
    $custCount = $result1->fetch_all(MYSQLI_ASSOC);
    $total = $custCount[0]['id'];
    $pages = ceil($total / $limit);

    $Previous = $page - 1;
    $Next = $page + 1;
} else {

    $result = $conn->query("SELECT * FROM f_list LIMIT $start, $limit");
    $customers = $result->fetch_all(MYSQLI_ASSOC);

    $result1 = $conn->query("SELECT count(id) AS id FROM f_list");
    $custCount = $result1->fetch_all(MYSQLI_ASSOC);
    $total = $custCount[0]['id'];
    $pages = ceil($total / $limit);

    $Previous = $page - 1;
    $Next = $page + 1;
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funders Lists</title>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <script type="text/javascript" src="../library/js/jquery-3.2.1.min.js"></script>

    <style>
        .pagination>li>a {
            background-color: #343a40 !important;
            color: white !important;
            border: none !important;
        }

        .pagination>li>a:focus,
        .pagination>li>a:hover,
        .pagination>li>span:focus,
        .pagination>li>span:hover {
            color: white !important;
            background-color: #18563e !important;
            border-color: none !important;
            border: none !important;
        }

        .pagination>.active>a {
            color: white !important;
            background-color: #28a745 !important;
            border: none !important;
        }

        .pagination>.active>a:hover {
            background-color: #343a40 !important;
            border: none !important;
        }

        #openNav:hover {
            color: white !important;
            background-color: #18563e !important;
        }

        @media (max-width: 575.98px) {
            #mySidebar {
                width: 60%;
            }
        }

        @media (min-width: 576px) and (max-width: 767.98px) {
            #mySidebar {
                width: 20%;
            }
        }


        @media (min-width: 768px) and (max-width: 991.98px) {
            #mySidebar {
                width: 20%;
            }
        }

        @media (min-width: 992px) and (max-width: 1199.98px) {
            #mySidebar {
                width: 20%;
            }
        }

        @media (min-width: 1200px) {
            #mySidebar {
                width: 20%;
            }
        }
    </style>
</head>

<body class="bg-dark" style="font-family: 'Segoe UI';">

    <!-- Header -->
    <?php
    include 'header2.php';
    ?>
    <!-- End of header -->


    <style>
        #Nav_hover2 {
            text-decoration: none;
        }

        #Nav_hover2:hover {
            background-color: #18563e !important;
            color: white !important;
            transition: 0.2s;
        }
    </style>
    <!--w3Schools  -->
    <div class="w3-sidebar text-dark w3-bar-block w3-card w3-animate-zoom" style="display:none;top:210px;font-size: 13px;" id="mySidebar">
        <button class="w3-bar-item bg-danger text-white w3-button w3-large" style="width: 60px;" onclick="w3_close()"><i class="bi bi-x"></i></button>

        <a id="Nav_hover2" href="funder_setup.php" class="w3-bar-item w3-button">Fund step</a>
        <a id="Nav_hover2" href="members_administration.php" class="w3-bar-item w3-2019-eden w3-button">Membership Administration</a>
        <a id="Nav_hover2" href="edi_claims.php" class="w3-bar-item w3-button">EDI Claims</a>
        <a id="Nav_hover2" href="claims_management.php" class="w3-bar-item w3-button">Claims Management</a>
        <a id="Nav_hover2" href="benefits_management.php" class="w3-bar-item w3-button">Benefits Management</a>
        <a id="Nav_hover2" href="additional_features.php" class="w3-bar-item w3-button">Additional Features</a>
        <a id="Nav_hover2" href="reports.php" class="w3-bar-item w3-button">Reports</a>
        <a id="Nav_hover2" href="billing_management_and_loss_control.php" class="w3-bar-item w3-button">Billing Management and Loss Control</a>
        <a id="Nav_hover2" href="faq_page1.php" class="w3-bar-item w3-button">FAQ</a>
    </div>



    <!-- <div class="container-fluid m-0 p-0"> 
        <div class="row">
            <div class="col">
                <div class="text-white text-uppercase p-3" style="font-weight:500;font-size: 24px;">Funders List</div>
            </div>
        </div>
    </div>-->
    <br>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg">
                <div class="" style="height: 40px;">
                    <button id="openNav" class="w3-button bg-dark text-white" onclick="w3_open()">&#9776;&ensp;&ensp;More</button>
                </div>
            </div>


            <div class="col-sm-6 col-lg">
                <form action="" method="POST">
                    <div class="" style="height: 40px;">
                        <button name="normal" class="w3-button small bg-dark text-white"><i class="bi bi-shield-fill-check text-success"></i> Normal</button>
                        <button name="asc" class="w3-button bg-dark small text-white"><i class="bi bi-shield-fill text-primary"></i> Ascending</button>
                        <button name="desc" class="w3-button bg-dark small text-white"><i class="bi bi-shield-slash-fill text-danger"></i> Descending</button>
                    </div>
                </form>
            </div>


            <div class="col-lg">
                <nav>
                    <ul class="pagination pagination-md  m-0 p-0 d-flex justify-content-end">
                        <li class="page-item">
                            <a class="page-link rounded-0" href="funderslist.php?page=<?= $Previous; ?>">
                                <i class="bi bi-chevron-compact-left text-white"></i></a>
                            </a>
                        </li>

                        <li class="page-item">
                            <a class="page-link rounded-0" href="funderslist.php?page=<?= $Next; ?>">
                                <i class="bi bi-chevron-compact-right text-white"></i>
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>

    <div class="" id="main">
        <div class="container">
            <div class="row p-0 m-0">
                <div class="col p-0 m-0">

                    <style>
                        .w3:hover {
                            background-color: #18563e !important;
                            transition: 0.2s !important;
                        }

                        .bg4 {
                            background-color: #18563e !important;
                            border: none !important;
                        }

                        td a:hover {
                            color: yellow;
                            text-decoration: none;
                            transition: 0.2s;
                        }
                    </style>

                    <div class="table-responsive border-0 p-0 m-0">
                        <table id="" class="table table-dark table-striped text-white" style="font-size: 13px;">
                            <caption class="mb-0">
                                Funders List
                            </caption>
                            <thead class="border-0">
                                <tr>
                                    <th class="bg4 text-center"> Number</th>
                                    <th class="bg4 ">Funder</th>
                                    <th class="bg4 ">Website</th>
                                    <th class="bg4 ">Members Portal</th>
                                    <th class="bg4 ">Providers Portal</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($customers as $customer) :  ?>
                                    <tr class="w3">
                                        <td><?= $customer['id']; ?></td>
                                        <td><?= $customer['funder']; ?></td>
                                        <td class="w3"> <a href=" <?= $customer['website']; ?>"><?= $customer['funder']; ?> website link</a></td>
                                        <td class="w3"> <a href="<?= $customer['members']; ?>"><?= $customer['funder']; ?> members portal</a> </td>
                                        <td class="w3"> <a href="<?= $customer['providers']; ?>"><?= $customer['funder']; ?> providers portal</a> </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center m-0 p-0">
                <div class="col m-0 p-0">
                    <nav class="p-0 m-0">
                        <ul class="pagination pagination-md m-0 p-0 d-flex justify-content-center">
                            <li class="page-item">
                                <a class="page-link rounded-0" href="funderslist.php?page=<?= $Previous; ?>">
                                    <i class="bi bi-chevron-compact-left text-white"></i>Previous</a>
                                </a>
                            </li>
                            <?php for ($i = 1; $i <= $pages; $i++) : ?>
                                <li><a href="funderslist.php?page=<?= $i; ?>"><?= $i; ?></a></li>
                            <?php endfor; ?>
                            <li class="page-item">
                                <a class="page-link rounded-0" href="funderslist.php?page=<?= $Next; ?>">
                                    Next <i class="bi bi-chevron-compact-right text-white"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#limit-records").change(function() {
                $('form').submit();
            })
        })
    </script>

    <!--JQuery-->
    <script>
        function w3_open() {
            document.getElementById("main").style.marginLeft = "19%";
            document.getElementById("mySidebar").style.display = "block";
            document.getElementById("openNav").style.display = 'none';
        }

        function w3_close() {
            document.getElementById("main").style.marginLeft = "0%";
            document.getElementById("mySidebar").style.display = "none";
            document.getElementById("openNav").style.display = "inline-block";
        }
    </script>
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