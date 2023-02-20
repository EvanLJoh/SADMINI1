<?php
// Make a connection to the database
$conn = new mysqli("localhost", "root", "", "sadmini1");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the values from the form
$inventory_id = $_POST['inventory_id'];
$product_id = $_POST['product_id'];
$P_INSTOCK = $_POST['P_INSTOCK'];
$P_QOH = $_POST['P_QOH'];

// Update the inventory record in the database
$sql = "UPDATE Inventory SET product_id='$product_id', P_INSTOCK='$P_INSTOCK', P_QOH='$P_QOH' WHERE inventory_id='$inventory_id'";
$result = $conn->query($sql);

// Check if the update was successful
if ($result) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
