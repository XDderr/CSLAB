<?php
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $num1 = (int) $_POST['num1'];
    $num2 = (int) $_POST['num2'];

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

    switch(($_POST["op"])){
        case 'sum' :
           echo (int) $sum = $num1 + $num2;
           break;
      
        case 'difference' :
           echo (int) $sum = $num1 - $num2;
            break;
        
        case 'product' :
            echo (int) $sum = $num1 * $num2;
            break;
            
        case 'quotient' :
            echo (int) $sum = $num1 / $num2;
            break;

        case 'all' :
            echo (int) $sum = $num1 + $num2;
            echo (int) $sum = $num1 - $num2;
            echo (int) $sum = $num1 * $num2;
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
    <title>Lab 9</title>
</head>
<body>
    <form method="POST">
        <input type = "text" name = "num1">
        <br><br>
        <input type = "text" name = "num2">
        <br><br>
        <select name = "op" id = "">
            <option value= "sum">Add</option>
            <option value= "difference">Subtract</option>
            <option value= "product">Multiply</option>
            <option value= "quotient">Divide</option>
            <option value= "all">All</option>
        </select>
        <button type = "submit"> Calculate</button>
</body>
</html>