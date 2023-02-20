<?php
// Make a connection to the database
$conn = new mysqli("localhost", "root", "", "sadmini1");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the factory ID from the AJAX request
$factory_id = $_POST["id"];

// Prepare the SQL statement
$sql = "SELECT * FROM Factory WHERE f_id = $factory_id";

// Execute the SQL statement and get the result set
$result = $conn->query($sql);

// Check if there is exactly one row in the result set
if ($result->num_rows == 1) {
    // Fetch the row as an associative array
    $row = $result->fetch_assoc();

    // Create an array to hold the factory information
    $factory_info = array();

    // Add each column to the array
    $factory_info["f_name"] = $row["f_name"];
    $factory_info["f_country"] = $row["f_country"];
    $factory_info["f_city"] = $row["f_city"];
    $factory_info["f_state_providence"] = $row["f_state_providence"];
    $factory_info["f_zipcode"] = $row["f_zipcode"];
    $factory_info["f_phone_number"] = $row["f_phone_number"];

    // Encode the array as a JSON object and print it
    echo json_encode($factory_info);
} else {
    // If there are zero or multiple rows, return an error message
    echo "Error: Factory not found";
}

// Close the database connection
$conn->close();
?>

