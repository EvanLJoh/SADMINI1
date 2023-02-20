<?php
$Product_ID = $_POST['Product_ID'];
$Quantity = $_POST['Quantity'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sadmini1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
  $stmt = $conn->prepare("INSERT INTO FactoryOrders ( Product_ID, Quantity) VALUES ( ?, ?)");
  $stmt->bind_param("ii", $Product_ID, $Quantity);
  $stmt->execute();
  echo "Factory Order Added!";
  $stmt->close();
  $conn->close();
}
?>