<?php
    $user="localhost";
    $username="root";
    $password="";
    $db="opinion_hub";
    $conn=new mysqli($user, $username, $password, $db);

    if($conn->connect_error){
        header("Location: ./error-connection.html");
    }
?>