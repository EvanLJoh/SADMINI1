<?php
$f_id = $_POST['f_id'];
$f_name = $_POST['f_name'];
$f_country = $_POST['f_country'];
$f_city = $_POST['f_city'];
$f_state = $_POST['f_state_providence'];
$f_zipcode = $_POST['f_zipcode'];
$f_phone_number = $_POST['f_phone_number'];


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
    $stmt = $conn->prepare("INSERT INTO Factory (f_id, f_name, f_country, f_city, f_state_providence, f_zipcode, f_phone_number) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("issssss", $f_id, $f_name, $f_country, $f_city, $f_state, $f_zipcode, $f_phone_number);
    $stmt->execute();
    echo "Factory List Updated!";
    $stmt->close();
    $conn->close();
  }
  ?>