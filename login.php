<?php
    header('Access-Control-Allow-Origin: *'); 
    header("Content-Type: application/json; charset=UTF-8");  
    $code = $_POST['code'];
    $myObj = new stdClass();

    if($code == 'test') {
        $myObj->record_id = '890578';
        $myObj->success = true;
        $myObj->{"2fa_type"} = 'phone';
        $myJSON = json_encode($myObj);

        echo $myJSON;
    } else {
        $myObj->success = false;

        $myJSON = json_encode($myObj);

        echo $myJSON;
    }
?>
