<?php

session_start();
if (!isset($_SESSION['username'])) {
    // header("Location: http://logserver.untad.ac.id/login.php");
    header("Location: http://localhost/kp/see_thelogs/auth/login.php");
    // echo "<script>window.location.href='http://logserver.untad.ac.id/login.php'</script>";
}

?>
