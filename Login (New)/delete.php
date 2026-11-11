<?php

session_start();
include('db.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$id = $_SESSION['id'];

// sql command
mysqli_query($conn, "DELETE FROM `users` WHERE `id` = $id");

// var_dump($query);

// redirect
header("Location: logout.php");