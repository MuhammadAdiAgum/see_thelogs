<?php

include "authCheck.php";
require("function/logserverCatch.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogServer</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">

    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/all.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">

    <script src="assets/js/jquery.js"></script>
    <script>
        // $(document).ready(function() {
        //     $("#filterInput").on("keyup", function() {
        //         var value = $(this).val().toLowerCase();
        //         $("#logsList li").filter(function() {
        //             $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        //         });
        //     });
        // });

        // $(document).ready(function() {
        //     $("#filterButton").click(function() {
        //         // var keyword =$("#filterInput").val().toLowerCase();
        //         var keyword =$("#filterInput").val().toLowerCase();
        //         console.log(keyword);

        //         $("#logsList li").filter(function() {
        //             $(this).toggle($(this).text().toLowerCase().indexOf(keyword) > -1)
        //         });
        //     });
        // });
    </script>

</head>

<body class="w-100 h-100">
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active bg-light-secondary">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <!-- <a href="#"><img src="assets/images/logo/logo.png" alt="Logo" srcset=""></a> -->
                            <a href="#">
                                <h3>SeeTheLogs</h3>
                            </a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item active ">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Log Server</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Client Server</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="client/servertest1.php">ServerTest1</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#" class="text-gray-500">Coming Soon...</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>



                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Log Server</h3>
                            <p class="text-subtitle text-muted">Main Server</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <a class="btn btn-danger" href="logout.php"> Logout </a>
                                <!-- <ol class="breadcrumb"> -->
                                <!-- <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li> -->
                                <!-- <li class="breadcrumb-item active" aria-current="page">Layout Default</li> -->
                                <!-- </ol> -->
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="container-fluid"">
                    <div class=" card">
                    <div class="card-content">
                        <div class="card-body">
                            <form method="POST">
                                <input type="submit" style="width: 200px;" name="btn-session-open" class="card-header rounded rounded-1 btn btn-light-success" value="Session Opened" readonly />
                                <input type="submit" style="width: 200px;" name="btn-session-close" class="card-header rounded rounded-1 btn btn-light-danger" value="Session Closed" readonly />
                                <input type="submit" style="width: 200px;" name="btn-failed-login" class="card-header rounded rounded-1 btn btn-light-warning" value="Failed Login" readonly />
                                <div class="col-sm-4 mt-3">
                                    <div class="form-group form-inline">
                                        <input id="filterInputDate" name="filterInputDate" type="text" placeholder="date">
                                        <input id="filterInput-user" name="filterInputUser" type="text" placeholder="user">
                                        <!-- <input id="filterInput-name" type="text" placeholder="Filter..."> -->
                                        <button type="submit" name="filterButton">filter</button>
                                    </div>
                                </div>
                            </form>
                            <div class="pt-2 ">
                                <div class="card-body border overflow-auto border-1 bg-light-secondary" style="max-height: 455px;">
                                    <ul id="logsList">
                                        <?php
                                        foreach ($logsArray as $logsLine) { ?>
                                            <li class='my-2' style='text-align: left;'><?= $logsLine; ?></li>
                                        <?php }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>

        <!-- <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer> -->
    </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>