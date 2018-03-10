<?php
//To get connected to the DB
require('connect.php');

//Check if the form is submitted
if (isset($_POST['ID'])){
//Assigning posted values to variables
$OID = $_POST["ID"];

//Checking the values are existing in the database or not
$query = "SELECT * FROM `orderDetails` WHERE OID='$OID'";
 
$result = mysqli_query($connection, $query);
$count = mysqli_num_rows($result);
}

if($count == 1){
 echo "Good!";  
} else { echo "No order found"; }
$connection->close();

