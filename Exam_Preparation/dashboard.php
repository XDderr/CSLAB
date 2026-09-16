<?php session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
</head>

<body>
    <h2>Hello <?php echo $_SESSION['username']; ?></h2>
    <script>
        function Dun() {
            let num1 = Number(document.getElementById("Score").value);
            let num2 = Number(document.getElementById("Total").value);
            let answer = (num1 / num2) * 100;
            if (answer > 74) {
                document.getElementById("answer").textContent = "You have passed!";
                document.getElementById("bulb").src = "ON.jpg";
            } else {
                document.getElementById("answer").textContent = "You have failed.";
                document.getElementById("bulb").src = "OFF.jpg";
            }
        }

        function Ran() {
            let num1 = Number(document.getElementById("Score").value);
            let num2 = Number(document.getElementById("Total").value);
            let answer = (num1 / num2) * 100;
            switch (true) {
                case answer >= 95:
                    document.getElementById("answer").textContent = "Excellent! You passed! " + answer + "%";
                    document.getElementById("bulb").src = "ON.jpg";
                    break;
                case answer >= 90:
                    document.getElementById("answer").textContent = "Great! You passed! " + answer + "%";
                    document.getElementById("bulb").src = "ON.jpg";
                    break;
                case answer >= 85:
                    document.getElementById("answer").textContent = "Very Good! You passed! " + answer + "%";
                    document.getElementById("bulb").src = "ON.jpg";
                    break;
                case answer >= 80:
                    document.getElementById("answer").textContent = "Good! You passed! " + answer + "%";
                    document.getElementById("bulb").src = "ON.jpg";
                    break;
                case answer > 74:
                    document.getElementById("answer").textContent = "Nice! You passed! " + answer + "%";
                    document.getElementById("bulb").src = "ON.jpg";
                    break;
                default:
                    document.getElementById("answer").textContent = "You failed. " + answer + "%";
                    document.getElementById("bulb").src = "OFF.jpg";
            }
        }

        function Submit() {
            let choice = document.getElementById("peep").value;
            switch (choice) {
                case "Percent":
                    Ran();
                    break;
                case "Pass":
                    Dun();
                    break;
            }
        }
    </script>
    <p id="answer"> Enter your score and the total score to get your grade. </p> 
    <input type="text" id="Score" placeholder="Enter your Score"> 
    <input type="text" id="Total" placeholder="Enter the Total Score"> 
    <select id="peep">
        <option value="Percent">Percentage</option>
        <option value="Pass">Pass/Fail</option>
    </select> <button id="sub" onclick="Submit()"> Submit </button> <br><br> <img id="bulb" src="OFF.jpg" width="500" height="500"> <br>
    <br> <a href="logout.php">Logout</a>
</body>

</html>