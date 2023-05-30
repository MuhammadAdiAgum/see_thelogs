<?php

session_start();
if (!isset($_SESSION['username'])) {
    // testing
    // header("Location: http://localhost/kp/see_thelogs/auth/login.php");
    // deploy
    header("Location: http://IP atau DOMAIN/see_thelogs/auth/login.php");
}

?>
