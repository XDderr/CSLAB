<?php
session_start();
include('db.php');

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}


// $sql = "DELETE FROM `users` WHERE `username` =  {$_SESSION['username']} ";
// $conn->query($sql);




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h3>
    <br>
    <a href="profile.php">Edit Profile</a> | <a href="logout.php">Logout</a> | <a href="delete.php">Delete</a> | <a href="disable.php">Disable</a>
    <?php
    $sql = $conn->query("SELECT * FROM users");
    if ($sql->num_rows > 0) {
        while ($row = $sql->fetch_assoc()) {
            echo $row['username'] . " | " . "<a href=admin_disable.php?id=" . $row['id'] . ">Disable</a> | <a href=admin_delete.php?id=" . $row['id'] . ">Delete</a><br>";
        }
    }
?>

</body>

</html>