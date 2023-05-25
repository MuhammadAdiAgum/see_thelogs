<?php

if (isset($_POST['btn-session-open'])) {
    $logsIn = shell_exec('sh /var/www/html/shell_script/server_test1/session-open.sh');
    $logsArray = explode("\n", $logsIn);
}
else if (isset($_POST['btn-session-close'])) {
    $logsOut =  shell_exec('sh /var/www/html/shell_script/server_test1/session-close.sh');
    $logsArray = explode("\n", $logsOut);
}
else if (isset($_POST['btn-failed-login'])) {
    $failedLogin =  shell_exec('sh /var/www/html/shell_script/server_test1/failed-login.sh');
    $logsArray = explode("\n", $failedLogin);
}
//else {
//    echo "<li style='text-align: left;'>$logsLine</li>";
//}

?>
