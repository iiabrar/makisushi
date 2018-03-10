<?php
//To get connected to the DB
require('connect.php');

//Check if the form is submitted
if (isset($_POST['ID']) and isset($_POST['password'])){
//Assigning posted values to variables
$ID = $_POST["ID"];
$passw = $_POST["password"];
//Checking the values are existing in the database or not
$query = "SELECT * FROM `employee` WHERE ID='$ID' and password='$passw'";
 
$result = mysqli_query($connection, $query);
$count = mysqli_num_rows($result);

//If the posted values are equal to the database values, then session will be created for the user
if ($count == 1){
$_SESSION['username'] = $ID;
}else{
//If the login credentials doesn't match any recored, will display an error message
$fmsg = "Invalid Login Credentials.";
}
}
//If the user is logged in Greets the user with message
if (isset($_SESSION['username'])){
$ID = $_SESSION['username'];
echo "Hi " . $ID . " ";
echo "This is the restaurant staff area";

$queryOrderList = "SELECT * FROM `orderDetails`";
 
$resultOrder = mysqli_query($connection, $queryOrderList);
//$countOrders = mysqli_num_rows($resultOrder);

$results = $connection->query($queryOrderList);
 
 echo "<table style='border:solid'>";
 echo "<tr><th>Order ID</th><th>Appetizer</th><th>Rolls</th><th>Status</th></tr>";
if($results->num_rows > 0){
            while ($row = $results->fetch_assoc())
            {
            echo "<tr>";
            echo "<td>".$row["OID"]."</td>";
            echo "<td>".$row["appetizer"]."</td>";
            echo "<td>".$row["rolls"]."</td>";
            echo "<td>";
            ?>
                <form id="status" action="updateStatus.php?OID=<?php echo $row["OID"] ?>" method='post' accept-charset='UTF-8'>
                  <select name="status">
                    <option value="<?php echo $row["status"] ?>" selected><?php echo $row["status"] ?></option>
                    <option value="In progress">In progress</option>
                    <option value="Ready">Ready</option>
                    <option value="Out for delivery">Out for delivery</option>
                  </select>
                    <input type="submit" value="Update">
                </form>
            <?php
            echo "</td>";
            echo "</tr>";
            }  
            }


echo " <a href='logout.php'>Click here to logout</a>";
}
$connection->close();