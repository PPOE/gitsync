<?php 
    // Please randomize the CheckID!
    $checkID = '';
    // Path to your GitRepo - Relative Path
    $path = '';

    if (isset($_GET[$checkID])) {
        echo shell_exec('cd '. $path .' && git pull');
    } else {
        // Send 404 if CheckId is false
        http_response_code(404);
        die;
    }
?>