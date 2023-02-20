<?php
// Make a connection to the database
$conn = new mysqli("localhost", "root", "", "sadmini1");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the ID passed from the AJAX request
$id = $_POST['id'];

// Prepare the SQL statement to retrieve the inventory information
$stmt = $conn->prepare("SELECT product_id, P_INSTOCK, P_QOH FROM Inventory WHERE inventory_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

// Get the inventory information and send it back to the AJAX request as a JSON object
if ($row = $result->fetch_assoc()) {
    echo json_encode($row);
} else {
    echo "No inventory record found for ID " . $id;
}

// Close the database connection
$stmt->close();
$conn->close();
?>
