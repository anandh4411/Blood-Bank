<?php
session_start();
unset($_SESSION['donor-id']);
unset($_SESSION['donor-name']);
unset($_SESSION['donor-email']);
unset($_SESSION['donor-phone']);
unset($_SESSION['donor-location']);
unset($_SESSION['donor-blood_group']);
unset($_SESSION['donor-age']);
header("Location: donor.php");
?>