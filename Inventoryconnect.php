<?php
$product_id = $_POST['product_id'];
$P_INSTOCK = $_POST['P_INSTOCK'];
$P_QOH = $_POST['P_QOH'];

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
  $stmt = $conn->prepare("INSERT INTO Inventory ( product_id, P_INSTOCK, P_QOH) VALUES ( ?, ?, ?)");
  $stmt->bind_param("iii", $product_id, $P_INSTOCK, $P_QOH);
  $stmt->execute();
  echo "Inventory Added!";
  $stmt->close();
  $conn->close();
}
?>