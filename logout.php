<?php
//Logout and take the user to login page
session_start();
session_destroy();
header('Location: login.php');
$connection->close();
