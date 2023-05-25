<?php

if (isset($_POST['btn-session-open'])) {
    // server
    // $logsIn = shell_exec('sh /var/www/html/shell_script/log_server/session-open.sh');

    // local
    $logsIn = shell_exec('sh /opt/lampp/htdocs/logserver_fremote/shell_script/log_server/session-open.sh');
    
    $logsArray = explode("\n", $logsIn);
}
else if (isset($_POST['btn-session-close'])) {
    // server
    // $logsOut =  shell_exec('sh /var/www/html/shell_script/log_server/session-close.sh');
    
    // local
    $logsOut = shell_exec('sh /opt/lampp/htdocs/logserver_fremote/shell_script/log_server/session-close.sh');
    
    $logsArray = explode("\n", $logsOut);
}
else if (isset($_POST['btn-failed-login'])) {
    // server
    // $failedLogin =  shell_exec('sh /var/www/html/shell_script/log_server/failed-login.sh');

    // local
    $failedLogin = shell_exec('sh /opt/lampp/htdocs/logserver_fremote/shell_script/log_server/failed-login.sh');
    
    $logsArray = explode("\n", $failedLogin);
}
//else {
//   echo "<li style='text-align: left;'>$logsLine</li>";
//}

?>
