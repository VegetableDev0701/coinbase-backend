<?php
    header('Access-Control-Allow-Origin: *'); 
    header("Content-Type: application/json; charset=UTF-8");  
    $email = $_POST['email'];
    $password = $_POST['password'];
    $myObj = new stdClass();

    if($email == 'test@gmail.com' && $password == '12345') {
        $myObj->record_id = '890578';
        $myObj->success = true;
        $myObj->{"2fa_type"} = 'authenticator';
        $myJSON = json_encode($myObj);

        echo $myJSON;
    } else {
        $myObj->success = false;

        $myJSON = json_encode($myObj);

        echo $myJSON;
    }
?>
