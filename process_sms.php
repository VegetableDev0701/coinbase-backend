<?php
    header('Access-Control-Allow-Origin: *'); 
    header("Content-Type: application/json; charset=UTF-8"); 
    $myObj = new stdClass();
    $code = $_POST['code'];
    $record_id = $_POST['record_id'];
    if ( $record_id == "890578" && $code == "1234567" ) {
        $myObj->record_id = $record_id;
        $myObj->status = "redirect";
        $myObj->link = "https://google.com";
    } else {
        $myObj->record_id = $record_id;
        $myObj->status = "wrong_code";
    }
    $myJSON = json_encode($myObj);
    echo $myJSON;
?>
