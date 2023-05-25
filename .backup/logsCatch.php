<?php

if (isset($_POST['btn-session-open'])) {
    $logsIn = shell_exec('sh /opt/lampp/htdocs/kpupt4/scriptkp-in.sh');
    $logsArray = explode("\n", $logsIn);
    // var_dump($logsArray); die;
}
else if (isset($_POST['btn-session-close'])) {
    $logsOut =  shell_exec('sh /opt/lampp/htdocs/kpupt4/scriptkp-out.sh');
    $logsArray = explode("\n", $logsOut);
}
else {
    // $logsLine = "<li></li>";
    echo "wait a second...";
}







// $searchString = 
// $search = shell_exec('grep -l' . $searchString )

?>