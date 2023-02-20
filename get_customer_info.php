<?php
// Make a connection to the database
$conn = new mysqli("localhost", "root", "", "sadmini1");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the customer ID from the POST data
$customer_id = $_POST['id'];

// Fetch the customer data from the database
$sql = "SELECT * FROM Customer WHERE customer_id = '$customer_id'";
$result = $conn->query($sql);

// Return the customer data in JSON format
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $response = array(
        'first_name' => $row['first_name'],
        'last_name' => $row['last_name'],
        'email'  => $row['email'],
        'phone_number' => $row['phone_number'],
        'address' => $row['address'],
    );
    echo json_encode($response);
} else {
    echo "No results";
}

// Close the database connection
$conn->close();
?>