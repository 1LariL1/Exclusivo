<?php

require_once '../config/connect.php';


if(isset($_POST['g-recaptcha-response'])){
    $secretkey = "6LeFHtcmAAAAAOyCB46Aa3I38puI-i4U-hgnzeHv";
    $remoteip = $_SERVER['REMOTE-ADDR'];
    $response = $_POST['g-recaptcha-response'];
    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$remoteip";
    $file= file_get_contents($url);
    $data = json_decode($file);

    if($data->success==true) {
        $textMessage= $_POST['textMessage'];
        $telMessage = $_POST['telMessage'];
        $nameMessage = $_POST['nameMessage'];
        $emailMessage = $_POST['emailMessage'];
        
        
        mysqli_query($connect, query:"INSERT INTO `message` (`id_message`, `text`, `telephone`, `fio`, `email`) VALUES (NULL, '$textMessage', '$telMessage', '$nameMessage', '$emailMessage')");
        
        header('Location:/contacts.php');
    }
    else {
        echo "вы робот";
    }
}
else {
    echo "error";
}

?>

