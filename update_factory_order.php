<?php
// Make a connection to the database
$conn = new mysqli("localhost", "root", "", "sadmini1");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the factory order ID and updated values from the form submission
$f_order_id = $_POST["f_order_id"];
$product_id = $_POST["product_id"];
$quantity = $_POST["quantity"];
$PaymentDueDate = $_POST["PaymentDueDate"];

// Prepare the SQL statement to update the factory order record
$sql = "UPDATE FactoryOrders SET product_id='$product_id', quantity=$quantity, PaymentDueDate='$PaymentDueDate' WHERE f_order_id=$f_order_id";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Factory order record updated successfully";
} else {
    echo "Error updating factory order record: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
