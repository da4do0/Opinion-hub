<?php
    require_once('connection.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $name=$_POST['name'];
        $surname=$_POST['surname'];
        $pwd=$_POST['pwd'];
        $mail=$_POST['mail'];
        $nickname=$_POST['nickname'];
        $job=$_POST['job'];
        /* $sesso=$_POST['male']; */

        $sql_sign_up="insert into utente(nome,cognome,email,nickname,professione,password,sesso) values
        ('$name', '$surname', '$pwd', '$mail', '$nickname', '$job', 'male')";

        if (mysqli_query($conn, $sql_sign_up)) {
            header("Location: ../login.html");
        }
    }
?>