<?php
$server = "localhost";
$username = "anandh";
$password = "12345678";
$database = "blood_donation";

// Create connection
$connect = mysqli_connect($server, $username, $password, $database);

// $query = "INSERT INTO donor (name) VALUES ('anandh')";
// mysqli_query($connection, $query);
// $results = mysqli_query($connection, "SELECT * FROM donor"); 
// while ($row = mysqli_fetch_array($results)){
//     echo $row['name'];
// }

?>