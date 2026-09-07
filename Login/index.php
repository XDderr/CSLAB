<?php
session_start();

//declare default credentials
$defaultUsername = "John123";
$defaultPassword = "password123";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($defaultUsername == $username && $defaultPassword == $password){
        $_SESSION['username'] = $username;

        header("Location: dashboard.php");
        exit();
    } else {
        $message = "Invalid Credentials";
    }
}
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
<label for = "password"> Enter username
        <input type = "text" placeholder = "password" name = "password">
</label>
<button type = "submit"> Submit </button>
</form>
<p style="color: red">
    <?php echo $message;?>
    
</body>
</html>