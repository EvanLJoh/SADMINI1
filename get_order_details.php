<?php
// Make a connection to the database
$conn = new mysqli("localhost", "root", "", "sadmini1");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID of the selected order
$Cust_order_id = $_POST['id'];

// Get the Customer order details from the database
$sql = "SELECT * FROM CustomerOrders WHERE Cust_order_id = '$Cust_order_id'";
$result = $conn->query($sql);

// Check if there is a result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $response = array(
        'OrderDetails' => $row['OrderDetails'],
        'quantity' => $row['quantity'],
        'customer_email' => $row['customer_email'],
        'card_number' => $row['card_number'],
    );
    echo json_encode($response);
} else {
    echo "No results";
}

// Close the database connection
$conn->close();
?>














