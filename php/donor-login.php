<?php 

require_once 'db.php';
session_start();

$phone = $_POST["phone"];
$password = $_POST["password"];
$query = "SELECT * FROM donor";

$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result)){
    $match = password_verify($password, $row["password"]);
    if ($phone == $row["phone"] && $match) {
        $name = $row["name"];
        $_SESSION['username'] = $name;
        header("Location: ../index.php");
    }
    else{
        $incorrect = true;
    }
}

if ($incorrect) {
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
                <h1>Phone or Password is incorrect!</h1>
                <a style="margin-top: 20px;" class="btn btn-primary" href="../pages/donor-login.html">Back to Login</a>
            </div>
        </body>
        
        </html>';
}

?>