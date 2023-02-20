<?php
// Make a connection to the database
$conn = new mysqli("localhost", "root", "", "sadmini1");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the product ID and updated values from the form submission
$product_id = $_POST["id"];
$product_name = $_POST["P_NAME"];
$product_brand = $_POST["P_Brand"];
$product_type = $_POST["P_Type"];
$product_date = $_POST["P_DATE"];
$product_price = $_POST["P_PRICE"];
$factory_id = $_POST["F_ID"];

// Prepare the SQL statement to update the product record
$sql = "UPDATE Products SET P_NAME='$product_name', P_Brand='$product_brand', P_Type='$product_type', P_DATE='$product_date', P_PRICE=$product_price, F_ID=$factory_id WHERE P_ID=$product_id";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Product record updated successfully";
} else {
    echo "Error updating product record: " . $conn->error;
}

// Close the database connection
$conn->close();
?>