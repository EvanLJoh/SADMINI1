<?php
$OrderDetails = $_POST['OrderDetails'];
$quantity = $_POST['quantity'];
$customer_email = $_POST['email'];
$card_number = !empty($_POST['card_number']) ? $_POST['card_number'] : null;

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sadmini1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO CustomerOrders (OrderDetails, quantity, customer_email, card_number) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $OrderDetails, $quantity, $customer_email, $card_number);
$stmt->execute();

if ($stmt->affected_rows > 0) {
echo "Order placed successfully!";
} else {
echo "Failed to place order.";
}

$stmt->close();
$conn->close();
?>

