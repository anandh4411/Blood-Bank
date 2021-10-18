<?php

require_once '../db.php';
session_start();

$id = $_SESSION["donor-id"];
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$location = $_POST["location"];
$blood_group = $_POST["blood_group"];
$age = $_POST["age"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

if ($password == $cpassword) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "UPDATE donor 
    SET name = '$name', email = '$email', phone = '$phone', location = '$location', blood_group = '$blood_group', age = '$age', password = '$hashed_password' 
    WHERE id = '$id'";
    mysqli_query($connect, $query);
    $_SESSION['donor-name'] = $name;
    $_SESSION['donor-email'] = $email;
    $_SESSION['donor-phone'] = $phone;
    $_SESSION['donor-location'] = $location;
    $_SESSION['donor-blood_group'] = $blood_group;
    $_SESSION['donor-age'] = $age;
    header("Location: profile.php");
}
else {
    echo '<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error</title>
    
        <link rel="shortcut icon" href="../../images/favicon.png" />
        <!-- The styles -->
        <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    </head>
    
    <body>
        <div style="margin-top: 40px;" class="container">
            <h1>Passwords does not match!</h1>
            <a style="margin-top: 20px;" class="btn btn-primary" href="profile.php">Back to Update</a>
        </div>
    </body>
    
    </html>';
}

?>