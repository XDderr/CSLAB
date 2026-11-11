<?php

session_start();
include('db.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

// sql command
 mysqli_query(
            $conn,
            "UPDATE `users` SET `active` = 0 WHERE `id` = '{$_SESSION['id']}'"
        );


// var_dump($query);

// redirect
header("Location: logout.php");