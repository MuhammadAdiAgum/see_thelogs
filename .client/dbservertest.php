<?php
require("../auth/authCheck.php");
// require("../function/servertest1Catch.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeeTheLogs</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/vendors/fontawesome/all.min.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="../assets/css/loading.css">
    <link rel="stylesheet" href="../assets/sweetalert/sweetalert2.min.css">
    <script src="../assets/sweetalert/sweetalert2.min.js"></script>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/jquery-ui.min.js"></script>
    <!-- <script src="../assets/js/jquery.js"></script> -->
    <script src="../myscript.js"></script>
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
                            <a href="../index.php" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Log Server</span>
                            </a>
                        </li>
                        <li class="sidebar-item active has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Client Server</span>
                            </a>
                            <ul class="submenu active ">
                                <li class="submenu-item">
                                    <a href="../client/servertest1.php">ServerTest1</a>
                                </li>
                                <li class="submenu-item active ">
                                    <a href="../client/dbservertest.php">DBServerTest</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="../client/webservertest.php">WebServerTest</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="#" class="text-gray-500">Soon...</a>
                                </li>
                            </ul>
                        </li>
                        <li class="mt-5 sidebar-item">
                            <a href="../auth/logout.php" style="color: red;" class='btn btn-light-danger sidebar-link'>
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
                            <h3>DB Server Test</h3>
                            <p class="text-subtitle text-muted">Client Server</p>
                        </div>
                    </div>
                </div>
                <section class="container-fluid"">
                    <div class=" card">
                    <div class="card-content">
                        <div class="card-body">
                            <form autocomplete="off" method="POST">
                                <div class="input-group">
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <select style="width: 250px;" name="filterOption" class="form-control form-select">
                                                        <option value="" selected disabled>Choose Option</option>
                                                        <option value="session opened">Session Opened</option>
                                                        <option value="session closed">Session Closed</option>
                                                        <option value="failed password">Failed Login</option>
                                                    </select>
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-file-binary"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input style="width: 250px;" class="form-control" id="filterInputDate" name="filterInputDate" type="text" placeholder="date" autocomplete="off">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-calendar-date"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input style="width: 250px;" class="form-control" id="filterInputUser" name="filterInputUser" type="text" placeholder="user">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-group has-icon-left">
                                                <button style="width: 250px;" id="filterButton" class="btn btn-success" type="submit" name="filterButton" onclick="submit()">Filter</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                            <?php
                            $logs = $_POST['filterOption'];
                            $date = $_POST['filterInputDate'];
                            $user = $_POST['filterInputUser'];
                            if ($logs == "" && $date == "" && $user == "") {
                                $logsInFilter = shell_exec("echo 'null'");
                                $logsArray = explode("\t", $logsInFilter);
                            }
                            if (isset($_POST['filterButton'])) {
                                if ($logs == "") {
                                    echo
                                    '<script>
                                        noOption();
                                    </script>';
                                    $logsInFilter = shell_exec("echo 'null'");
                                    $logsArray = explode("\t", $logsInFilter);
                                    $date = "";
                                    $user = "";
                                } else if ($date == "") {
                                    echo
                                    '<script>
                                        noDate();
                                    </script>';
                                    $logsInFilter = shell_exec("echo 'null'");
                                    $logsArray = explode("\t", $logsInFilter);
                                    $date = "";
                                    $user = "";
                                } else {
                                    // $logsInFilter = shell_exec("grep -i '{$logs}' /home/origin/.Data/sshd.log | grep -w '{$date}' | grep -i '{$user}'");
                                    $logsInFilter = shell_exec("grep -i '{$logs}' /var/log/rsyslogClient/dbserver-test/sshd.log | grep -w '{$date}' | grep -i '{$user}'");
                                    $logsArray = explode("\n", $logsInFilter);
                                    // var_dump($logsArray);
                                    if (is_array($logsArray) && count($logsArray) == 1) {
                                        // echo 'empty logs';
                                        echo
                                        '<script>
                                            emptyLogs();
                                        </script>';
                                    }
                                    if (is_array($logsArray) && count($logsArray) >= 2) {
                                        echo
                                        '<script>
                                                haveLogs();
                                        </script>';
                                    }
                                }
                            }
                            ?>
                            <div class="pt-2 ">
                                <div onload="waitingLogs()" class="card-body border overflow-auto border-1 bg-light-secondary" style="max-height: 455px;">
                                    <p>
                                        <b>RESULT</b><br>
                                        <i>option</i> : <b><?= $logs; ?></b> &nbsp;|&nbsp;
                                        <i>date</i> : <b><?= $date; ?></b> &nbsp;|&nbsp;
                                        <i>user</i> : <b><?= $user; ?></b>
                                    </p>
                                    <hr>
                                    <ul id="logsList">
                                        <?php foreach ($logsArray as $logsLine) : ?>
                                            <li class='my-2' style='text-align: left;'><?= $logsLine; ?></li>
                                        <?php endforeach;
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            </section>
        </div>
    </div>
    </div>
    <script src="../assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="../assets/js/pages/dashboard.js"></script>
    <script src="../assets/js/main.js"></script>
    <script>
        $(function() {
            $("#filterInputDate").datepicker({
                showButtonPanel: true,
                dateFormat: 'M d'
            });
        });
    </script>
</body>

</html>