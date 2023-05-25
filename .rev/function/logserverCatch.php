

<?php

$logs = $_POST['filterOption'];
$date = $_POST['filterInputDate'];
$user = $_POST['filterInputUser'];

if ($logs == "" && $date == "" && $user == "") {
    $logsInFilter = shell_exec("echo 'null'");
    $logsArray = explode("\t", $logsInFilter);
} else if (isset($_POST['filterButton'])) {
    // sleep(3);
    // if ($logs == "") {
    //     echo
    //     '<script type="text/javascript">
    //     alert("I am an alert box!");
    //     </script>';
    //     $logsInFilter = shell_exec("echo 'null'");
    //     $logsArray = explode("\t", $logsInFilter);
    //     $date = "";
    //     $user = "";
    // } else if ($date == "") {
    //     echo
    //     '<script type="text/javascript">
    //     alert("I am an alert box!");
    //     </script>';
    //     $logsInFilter = shell_exec("echo 'null'");
    //     $logsArray = explode("\t", $logsInFilter);
    //     $date = "";
    //     $user = "";
    // } else {
        $logsInFilter = shell_exec("grep -i '{$logs}' /home/origin/.Data/sshd.log | grep -i '{$date}' | grep -i '{$user}'");
        $logsArray = explode("\n", $logsInFilter);
    // }
}

?>