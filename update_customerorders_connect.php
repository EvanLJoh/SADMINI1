<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "sadmini1");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the values from the form
$order_id = $_POST['Cust_order_id'];
$order_details = $_POST['OrderDetails'];
$quantity = $_POST['quantity'];
$card_number = !empty($_POST['card_number']) ? $_POST['card_number'] : null;


// Prepare the SQL statement
$sql = "UPDATE CustomerOrders SET OrderDetails = ?, Quantity = ?, card_number = ? WHERE Cust_order_id = ?";

// Prepare the statement and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("siii", $order_details, $quantity, $card_number, $order_id);


// Execute the statement
if ($stmt->execute()) {
    echo "Record updated successfully.";
} else {
    echo "Error updating record: " . $conn->error;
}

// Close the database connection
$conn->close();
?>


