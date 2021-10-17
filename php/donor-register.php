<?php

require_once 'db.php';

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$location = $_POST["location"];
$blood_group = $_POST["blood_group"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

if ($password == $cpassword) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO donor (name, email, phone, location, blood_group, password) 
    VALUES ('$name', '$email', '$phone', '$location', '$blood_group', '$hashed_password')";
    mysqli_query($connect, $query);
}
else {
    echo '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error</title>
    
        <link rel="shortcut icon" href="../images/favicon.png" />
        <!-- The styles -->
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
    </head>
    
    <body>
        <div style="margin-top: 40px;" class="container">
            <h1>Passwords does not match!</h1>
            <a style="margin-top: 20px;" class="btn btn-primary" href="../pages/donor-register.html">Back to Register</a>
        </div>
    </body>
    
    </html>';
}

?>