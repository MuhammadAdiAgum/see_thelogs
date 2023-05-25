<?php

if (isset($_POST['filterButton'])) {
    $logs = $_POST['filterOption'];
    $date = $_POST['filterInputDate'];
    $user = $_POST['filterInputUser'];

    $logsInFilter = shell_exec("grep -E '{$logs}' /var/log/auth.log.1 | grep -E '{$date}' | grep -E '{$user}'");
    $logsArray = explode("\n", $logsInFilter);

    // if ($logs == "" && $date == "" && $user == "") {
    //     $logsInFilter = shell_exec("echo 'null'");
    //     $logsArray = explode("\t", $logsInFilter);
    // }
}

?>