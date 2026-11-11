<?php
session_start();
include('db.php');

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        $errors[] = "Username is required";
    }


    $result = mysqli_query($conn, 
            "SELECT * FROM users WHERE username = '$username' 
            AND active = 1"
    );

    $user = mysqli_fetch_assoc($result);


    // if(mysqli_num_rows($result)){
    //     echo "Account is disabled";
    // }
    
    if ($user) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $user['username'];
            $_SESSION['id'] = $user['id'];
            header("Location: dashboard.php");
            exit();
        }
    }

    // $resultInactive = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' AND active = 0");
    // // $userInactive = mysqli_fetch_assoc($result);

    // if(mysqli_num_rows($resultInactive) > 0){
    //     echo "Account is disabled";
    // }


    if (empty($errors)) {
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo (isset($_POST['username'])) ? $_POST['username'] : ""; ?>">
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <br><br>
        <button type="submit">Login</button>
    </form>
    <br><br>
    <a href="register.php">Register</a>
    <?php

    foreach ($errors as $error) {
        echo $error . "<br>";
    }

    ?>
</body>

</html>