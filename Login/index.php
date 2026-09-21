<?php
session_start();

//declare default credentials
//$defaultUsername = "John123";
//$defaultPassword = "password123";

include ("db.php");

$errors = [];

//$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];

    if (empty($username)){
        $errors[] = "Username is required";
    } else if (strlen($username) < 8){
        $errors[] = "Username must be 8 or more characters long";
    }

    $sql = "SELECT `username` FROM `users` WHERE `username` = `$username`";

    $userCheck = $conn->query($sql);

    if ($userChecl -> num_rows > 0){
        $errors[] = "Username already exists.";
    }

    $passwordPatter = '/^(?=.*[A-Z])(?=.*[a-z]?=.*[\W_]).{8,}$/';

    if($password != $confirm_password){
        $errors[]="Password did not match";
    }

    if(!preg_match($passwordPatter, $password)){
        $errors[] = "Password must contain lower and upper case with number(s)";
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    if(empty($errors)){
        $sql = "INSERT INTO `users` (`username`. `password`) VALUES ('$username', '$hashedPassword')";
        $conn->query($sql);
    }
    }

    //if($defaultUsername == $username && $defaultPassword == $password){
        //$_SESSION['username'] = $username;

        //header("Location: dashboard.php");
        //exit();
    //} else {
        //$message = "Invalid Credentials";
    //}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 8</title>
</head>
<body>
    <h3>Login System </h3>
    <form method="POST">
    <label for = "username"> Enter username
        <input type = "text" placeholder = "username" name = "username">
</label>
<br><br>
<label for = "password"> Enter Password
        <input type = "text" placeholder = "password" name = "password">
</label>

<button type = "submit"> Submit </button>
</form>
<p style="color: red">
    <?php //echo $message;
    foreach($errors as $error){
        echo $error . "<br>";
    }


    ?>
    
</body>
</html>