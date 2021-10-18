<?php
    session_start();
    unset($_SESSION['reciever-id']);
    unset($_SESSION['reciever-name']);
    unset($_SESSION['reciever-email']);
    unset($_SESSION['reciever-phone']);
    unset($_SESSION['reciever-location']);
    header("Location: reciever.php");
?>