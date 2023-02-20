<?php
// Make a connection to the database
$conn = new mysqli("localhost", "root", "", "sadmini1");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID of the selected order
$f_order_id = $_POST['id'];

// Get the factory order details from the database
$sql = "SELECT * FROM FactoryOrders WHERE f_order_id = '$f_order_id'";
$result = $conn->query($sql);

// Check if there is a result
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $response = array(
        'product_id' => $row['product_id'],
        'quantity' => $row['quantity'],
        'PaymentDueDate' => $row['PaymentDueDate']
    );
    echo json_encode($response);
} else {
    echo "No result found";
}

// Close the database connection
$conn->close();
?>
