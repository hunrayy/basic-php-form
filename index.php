<?php
    header("Access-Control-Allow-origin: *");
    header("Access-Control-Allow-Methods: *");
    header("Access-control-Allow-Headers: *");
    // header("Content-type: application/json");
    // print_r($_POST);

    echo($_POST["username"]);
    echo($_POST["email"]);
    echo($_POST["password"]);




?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div classname="wrapper">
        <form classname="form" action="index.php" method="POST">
            <div>
                <label>Enter Username:</label><br>
                <input type="text" name="username">
            </div>
            <div>
                <label>Enter Email:</label><br>
                <input type="text" name="email">
            </div>
            <div>
                <label>Enter Password:</label><br>
                <input type="password" name="password">
            </div>
            <button>Submit</button>
        <form>
    </div>
    
</body>
</html>