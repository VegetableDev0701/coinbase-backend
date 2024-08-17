<?php
    header('Access-Control-Allow-Origin: *'); 
    header("Content-Type: application/json; charset=UTF-8"); 
    $myObj = new stdClass();
    $code = $_POST['code'];
    $myObj->code = $code;
    $myJSON = json_encode($myObj);
    echo $myJSON;
?>