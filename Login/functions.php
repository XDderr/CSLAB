<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $_num1 = (int) $_POST['num1'];
    $_num2 = (int) $_POST['num2'];

    //function add($num1, $num2){
        //if(isset($_POST['op'])){
            //(int) $num1 = $_POST['num1'];
            //(int) $num2 - $_POST['num2'];

            //return $num1 + $num2;
        //}
    //}

   // function sub($num1, $num2){
        //if(isset($_POST['op'])){
            //(int) $num1 = $_POST['num1'];
            //(int) $num2 - $_POST['num2'];

            //return $num1 - $num2;
        //}
    //}

    //function times($num1, $num2){
        //if(isset($_POST['op'])){
            //(int) $num1 = $_POST['num1'];
            //(int) $num2 - $_POST['num2'];

           // return $num1 * $num2;
        //}
    //}

    //function divide($num1, $num2){
        //if(isset($_POST['op'])){
           //(int) $num1 = $_POST['num1'];
           // (int) $num2 - $_POST['num2'];

           // return $num1 / $num2;
        //}
    //}

    switch(isset($_POST["op"])){
        case 'sum' :
           // echo (int) $sum = $num1 + $num2;
           // break;

        case 'difference' :
           // echo (int) $sum = $num1 - $num2;
            //break;
        
        case 'product' :
            //echo (int) $sum = $num1 * $num2;
            //break;
            
        case 'quotient' :
            echo (int) $sum = $num1 / $num2;
            break;
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
        <input type = "text" name = "num1">
        <br><br>
        <input type = "text" name = "num2">
        <br><br>
        <select name = "op" id = "">
            <option value= "add">Add</option>
            <option value= "sub">Subtract</option>
            <option value= "times">Multiply</option>
            <option value= "divide">Divide</option>
        </select>
        <button type = "submit"> Calculate</button>
</body>
</html>