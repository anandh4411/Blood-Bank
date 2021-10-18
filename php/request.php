<?php

require_once 'db.php';

$donor_id = $_POST["donor_id"];
$user_id = $_POST["user_id"];

$query = "INSERT INTO requests (donor_id, user_id) VALUES ('$donor_id', '$user_id')";
mysqli_query($connect, $query);
header("Location: reciever/reciever.php");

?>