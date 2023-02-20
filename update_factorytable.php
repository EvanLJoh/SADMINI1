<?php
// Make a connection to the database
$conn = new mysqli("localhost", "root", "", "sadmini1");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the factory ID and updated values from the form submission
$factory_id = $_POST["id"];
$factory_name = $_POST["name"];
$factory_country = $_POST["country"];
$factory_city = $_POST["city"];
$factory_state_providence = $_POST["state_providence"];
$factory_zipcode = $_POST["zipcode"];
$factory_phone_number = $_POST["phone_number"];

// Prepare the SQL statement to update the factory record
$sql = "UPDATE Factory SET f_name='$factory_name', f_country='$factory_country', f_city='$factory_city', f_state_providence='$factory_state_providence', f_zipcode='$factory_zipcode', f_phone_number='$factory_phone_number' WHERE f_id=$factory_id";

// Execute the SQL statement
if ($conn->query($sql) === TRUE) {
    echo "Factory record updated successfully";
} else {
    echo "Error updating factory record: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
