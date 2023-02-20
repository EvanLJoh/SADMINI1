<?php
$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$address = $_POST['address'];
$phone_number = $_POST['phone_number'];
$date_of_birth = $_POST['date_of_birth'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sadmini1";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } else {
    $stmt = $conn->prepare("INSERT INTO Customer (email, first_name, last_name, address, phone_number, date_of_birth) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssss", $email, $first_name, $last_name, $address, $phone_number, $date_of_birth);
    $stmt->execute();
    echo "Customer Added Successfully!";
    $stmt->close();
    $conn->close();
  }
  ?>