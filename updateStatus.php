<?php
//To get connected to the DB
require('connect.php');

//Check if the form is submitted
if (isset($_POST['status'])){
//Assigning posted values to variables
$status = $_POST["status"];
$OID = $_GET["OID"];

$query = "UPDATE  orderDetails SET status='$status' WHERE OID='$OID'"; 
$result = mysqli_query($connection, $query);

if($result){
    echo "Status has been successfully updated!";
} else echo "Failed to update status!";
}