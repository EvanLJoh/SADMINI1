<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "sadmini1");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer_id = $_POST["customer_id"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $address = $_POST["address"];
    
    // Prepare and bind the update statement
    $stmt = $conn->prepare("UPDATE Customer SET first_name=?, last_name=?, email=?, phone_number=?, address=? WHERE customer_id=?");
    $stmt->bind_param("sssssi", $first_name, $last_name, $email, $phone_number, $address, $customer_id);
    
    // Execute the update statement
    if ($stmt->execute()) {
        echo "<h1>Customer record updated successfully.</h1>";
    } else {
        echo "Error updating customer record: " . $conn->error;
    }
}

// Close the database connection
mysqli_close($conn);
?>
