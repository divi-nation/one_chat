<?php
//  ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

require_once "conn.php";

$message = $_POST['message'];

if(isset($message)){

    $user_id = 1;
    $receiver_id = 2;
    

    
    $query = "insert into chats (
        `sender_id`, 
        `receiver_id`, 
        `message`) values (
            '$user_id',
            '$receiver_id',
            '$message'

        )";

    $execute = mysqli_query($conn, $query) or die ("unsuccessfull query");
}

?>