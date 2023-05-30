<?php
// require("auth/authCheck.php");
// require("function/logserverCatch.php");

// $clients_catch = shell_exec("ls -c /var/log/RsyslogClient | tr -d ' '");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeeTheLogs</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/vendors/fontawesome/all.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="assets/css/loading.css">
    <link rel="stylesheet" href="assets/sweetalert/sweetalert2.min.css">
    <script src="assets/sweetalert/sweetalert2.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <!-- <script src="jquery-3.6.0.min.js"></script> -->
    <script src="myscript.js"></script>
</head>

<body onload="waitingLogs()" id="body" class="w-100 h-100">
    <div id="overlay">
        <div class="cv-spinner">
            <span class="spinner"></span>
            <div class="cont">
                <div class="loading">loading...</div>
            </div>
        </div>
    </div>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active bg-light-secondary">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="#">
                                <h3>
                                    <span><i class="bi bi-alt"></i></span>
                                    SeeTheLogs
                                </h3>
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
                        <li class="sidebar-item">
                            <a href="index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Log Filter</span>
                            </a>
                        </li>
                        <li class="sidebar-item active ">
                            <a href="about.php" class='sidebar-link'>
                                <i class="bi bi-info-square"></i>
                                <span>About Us</span>
                            </a>
                        </li>
                        <!-- <li class="sidebar-item has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Client Server</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="client/servertest1.php">ServerTest1</a>
                                </li>
                                <li class="submenu-item">
                                    <a href="../client/dbservertest.php">DBServerTest</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../client/webservertest.php">WebServerTest</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#" class="text-gray-500">Soon...</a>
                                </li>
                            </ul>
                        </li> -->
                        <li class="mt-5 sidebar-item">
                            <!-- <a onclick="logoutConfirm()" href="auth/logout.php" style="color: red;" class='btn btn-light-danger sidebar-link'> -->
                            <a onclick="logoutConfirm()" style="color: red;" class='btn btn-light-danger sidebar-link'>
                                <i style="color: red;" class="bi bi-door-open"></i>
                                <span>Log Out</span>
                            </a>
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
                            <h3>About Us</h3>
                            <p class="text-subtitle text-muted">This is our project at UPT.TIK UNTAD</p>
                        </div>
                    </div>
                </div>
                <section class="container-fluid"">
                    <div class=" card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="p-0 m-0">
                                <p><strong>Our Group:</strong></p>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 align-content-center text-center">
                                    <img src="assets/our/avatar-1.png" class="img-fluid rounded-circle mx-auto d-block border border-secondary border-3 shadow" width="200px" alt="adi">
                                    <h5 class="pt-4">Chrissavelin Anastasya</h5>
                                    <p>qwerty@gmail.com</p>
                                </div>
                                <div class="col-lg-4 align-content-center text-center">
                                    <img src="assets/our/avatar-1.png" class="img-fluid rounded-circle mx-auto d-block border border-secondary border-3 shadow" width="200px" alt="adi">
                                    <h5 class="pt-4">Amalia</h5>
                                    <p>amaliarham23@gmail.com</p>
                                </div>
                                <div class="col-lg-4 align-content-center text-center">
                                    <img src="assets/our/avatar-2.png" class="img-fluid rounded-circle mx-auto d-block border border-secondary border-3 shadow" width="200px" alt="adi">
                                    <h5 class="pt-4">Muhammad Adi Agum</h5>
                                    <p>adiagum4.2@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        $(function() {
            $("#filterInputDate").datepicker({
                // showButtonPanel: true,
                // dateFormat: 'M d',
                // // showOtherMonths: true,
                // // selectOtherMonths: true,
                // changeMonth: true,
                // changeYear: true,

                // dateFormat: 'M d',
                dateFormat: 'yy/mm/dd',
                // onSelect: function(dateText, inst) {
                //     var dateArr = dateText.split(' ')
                //     // var suffix = "";
                //     if (inst.selectedDay < 10) {
                //         $("input#filterInputDate").val(dateArr[0] + ' ' + ' ' + dateArr[1]);
                //     } else if (inst.selectedDay > 9) {
                //         $("input#filterInputDate").val(dateArr[0] + ' ' + dateArr[1]);
                //     }
                // }
            });
        });
    </script>
</body>

</html>