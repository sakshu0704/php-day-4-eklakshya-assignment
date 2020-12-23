<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BANK</title>
    <style>
    body{
        background-image:url("bank.jpg");

    }
    </style>
    
</head>
<body>

    <form action="<?php $_SERVER['PHP_SELF']?>"method="get">
    Enter Name<input type="text" name="username"><br>
    select Account<select name="choice">
    <option value="select">--select--</option>
    <option value="Savings">Savings</option>
    <option value="Current">Current</option>
     </select>
     <input type="submit" value="suggest">
     </form>
     <?php
     $Account = $_GET['choice'];
     $username = $_GET['username'];
     echo"<h2>WELCOME TO BANK $username</h2>";
     include "virtualatm.php";
     ?>


</body>
</html>