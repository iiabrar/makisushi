<?php

//This code is used in every page needs to establish a connection with the database

$sname="localhost";
$username="info600";
$pw= "123456";
$dbname = "makisushi";
$connection = new mysqli($sname, $username, $pw, $dbname);