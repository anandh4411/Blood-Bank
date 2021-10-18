<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Blood Donation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Blood Donation">
    <meta name="author" content="xenioushk">
    <link rel="shortcut icon" href="images/favicon.png" />

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="https://kit.fontawesome.com/fbfe3d3910.js" crossorigin="anonymous"></script>
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
    <link href="css/venobox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/style.css">

<body>
    <div class="container text-center">
        <div style="margin-top: 20%;" class="row">
            <div class="intro-card col-md-5">
                <h1>Are you a reciever?</h1>
                <a style="margin-top: 20px;" class="btn btn-danger" href="php/reciever/reciever.php">Reciever Page</a>
            </div>
            <div class="intro-card col-md-5">
                <h1>Are you a donor?</h1>
                <a style="margin-top: 20px;" class="btn btn-danger" href="php/donor/donor.php">Donor Page</a>
            </div>
        </div>
    </div>
</body>

<style>
    .intro-card{
        padding: 20px;
        background-color: lightgrey;
        border-radius: 10px;
        margin-left: 50px;
    }
</style>

</html>