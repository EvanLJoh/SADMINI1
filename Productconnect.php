<?php
$P_NAME = $_POST['P_NAME'];
$P_Brand = $_POST['P_Brand'];
$P_Type = $_POST['P_Type'];
$P_DATE = date('Y-m-d',strtotime($_POST['P_DATE']));
$P_PRICE = $_POST['P_PRICE'];
$F_ID = $_POST['F_ID'];

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
  $stmt = $conn->prepare("INSERT INTO Products (P_NAME, P_Brand, P_Type, P_DATE, P_PRICE, F_ID) VALUES (?, ?, ?, ?, ?, ?)");
  $stmt->bind_param("ssssdi", $P_NAME, $P_Brand, $P_Type, $P_DATE, $P_PRICE, $F_ID);
  $stmt->execute();
  echo "Product Added!";
  $stmt->close();
  $conn->close();
}
?>