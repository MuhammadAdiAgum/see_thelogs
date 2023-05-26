<?php

session_destroy();
// error_reporting(0);
session_start();

if (isset($_SESSION['username'])) {
    // header("Location : index.php");
    header("Location: http://IP atau DOMAIN/see_thelogs/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SeeTheLogs</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="stylesheet" href="../assets/css/pages/auth.css">

    <link rel="stylesheet" href="../assets/sweetalert/sweetalert2.min.css">
    <script src="../assets/sweetalert/sweetalert2.min.js"></script>
    <script src="../assets/js/jquery-3.6.0.min.js"></script>

    <script src="../myscript.js"></script>

</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <!-- <div class="auth-logo">
                        <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a>
                    </div> -->
                    <h1 class="auth-title">Login...</h1>
                    <p class="auth-subtitle mb-5">Please, Login First to Continue.</p>

                    <form method="POST">
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" placeholder="Username" name="username">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left ">
                            <input type="password" class="form-control form-control-xl" placeholder="Password" name="password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>

                    <?php
                    
                    $username = "origin";
                    $password = "atakp22";
                    
                    if (isset($_POST['submit'])) {
                        if ($_POST['username'] == $username && $_POST['password'] == $password) {
                            $_SESSION['username'] = $username;
                            // header("Location: index.php");
                            header("Location: http://IP atau DOMAIN/see_thelogs/index.php");
                        } else {
                            echo
                            '<script>
                                wrongLogin();
                            </script>';
                        }
                    }
                    
                    ?>

                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>