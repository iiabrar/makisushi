<?php
//To get connected to the DB
require('connect.php');

//Assigning the customer posted values to variables
$name = $_POST["customer"];
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];
$phone = $_POST["phone"];
$email = $_POST["email"];

//Assigning the order details posted values to variables

$OID = rand(1, 999);
$appetizer = $_POST["appetizer"];
$rolls = $_POST["rolls"];

//Insert the customer data
$query = "INSERT INTO `Customer` (`email`, `name`, `address`, `city`, `state`, `zip`, `phone` ) VALUES ('$email', '$name', '$address', '$city', '$state', '$zip', '$phone')"; 
$result = mysqli_query($connection, $query);

$queryOrder = "INSERT INTO `orderDetails` (`OID`, `Customer`, `appetizer`, `rolls`, `status`) VALUES ('$OID', '$email', '$appetizer', '$rolls', 'In progress')"; 
$result = mysqli_query($connection, $queryOrder);

if($result){
echo "Your order has been placed!";
} else echo "ERROR!";
$connection->close();
