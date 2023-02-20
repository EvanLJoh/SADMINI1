<?php
// Make a connection to the database
$conn = new mysqli("localhost", "root", "", "sadmini1");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the product ID from the AJAX request
$product_id = $_POST["id"];

// Prepare the SQL statement
$sql = "SELECT * FROM Products WHERE P_ID = $product_id";

// Execute the SQL statement and get the result set
$result = $conn->query($sql);

// Check if there is exactly one row in the result set
if ($result->num_rows == 1) {
    // Fetch the row as an associative array
    $row = $result->fetch_assoc();

    // Create an array to hold the product information
    $product_info = array();

    // Add each column to the array
    $product_info["P_NAME"] = $row["P_NAME"];
    $product_info["P_Brand"] = $row["P_Brand"];
    $product_info["P_Type"] = $row["P_Type"];
    $product_info["P_DATE"] = $row["P_DATE"];
    $product_info["P_PRICE"] = $row["P_PRICE"];
    $product_info["F_ID"] = $row["F_ID"];

    // Encode the array as a JSON object and print it
    echo json_encode($product_info);
} else {
    // If there are zero or multiple rows, return an error message
    echo "Error: Product not found";
}

// Close the database connection
$conn->close();
?>


