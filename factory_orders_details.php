
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<title>Factory Orders with Product and Factory Details</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
<style>
		h1 {
			text-align: center;
            font-family: 'Times New Roman', Times, serif;
			font-size: 40px;
			color: #000000;
		}
		table {
			width: 60%;
			margin: auto;
			border-collapse: collapse;
			border: 1px solid #000000;
		}
		td {
			padding: 10px;
			border: 1px solid #000000;
		}
		a {
			text-align: center;
			margin: auto;
			display: block;
			width: 100px;
			background-color: #000000;
			color: #FFFFFF;
			font-family: Arial, sans-serif;
			font-size: 14px;
			font-weight: bold;
			text-decoration: none;
			padding: 10px;
			border-radius: 4px;
			margin-top: 20px;
		}
		a:hover {
			background-color: #FFFFFF;
			color: #000000;
		}
	</style>
</head>
<body>
    <h1>Factory Orders with Product and Factory Details</h1>
    <table style="width:60%; border: 1px solid black;">
            <tr>
                <th style='border: 1px solid black;text-align: center;'>Factory Order ID</th>
                <th style='border: 1px solid black;text-align: center;'>Product ID</th>
                <th style='border: 1px solid black;text-align: center;'>Name</th>
                <th style='border: 1px solid black;text-align: center;'>Brand</th>
                <th style="border: 1px solid black;text-align: center;">Product Type</th>
                <th style='border: 1px solid black;text-align: center;'>Factory Name</th>
                <th style='border: 1px solid black;text-align: center;'>Factory Phone</th>
                <th style='border: 1px solid black;text-align: center;'>Quantity</th>
                <th style='border: 1px solid black;text-align: center; text-align: center;'>Payment Amount</th>
                <th style='border: 1px solid black;text-align: center;'>PaymentDueDate</th>
            </tr>
<?php
  // Create connection
  $conn = new mysqli("localhost", "root", "", "sadmini1");
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 

$sql = "SELECT 
Products.P_Price * FactoryOrders.Quantity AS Price,
FactoryOrders.F_Order_ID, Products.P_ID,
Products.P_NAME, Products.P_Brand, Products.P_Type, Factory.F_Name, 
Factory.F_Phone_Number, FactoryOrders.Quantity,FactoryOrders.PaymentDueDate
FROM FactoryOrders
JOIN Products 
ON FactoryOrders.Product_ID = Products.P_ID
JOIN Factory 
ON Products.F_ID = Factory.F_ID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo 
    "<tr>
        <td style='border: 1px solid black;text-align: center;'>" . $row["F_Order_ID"]. "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["P_ID"]. "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["P_NAME"]. "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["P_Brand"]. "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["P_Type"]. "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["F_Name"]. "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["F_Phone_Number"]. "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["Quantity"]. "</td>
        <td style='border: 1px solid black;text-align: center;'>" . number_format($row["Price"],2) . "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["PaymentDueDate"]. "</td>
    </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
<a href="index.html">Back to Home</a>
</body>
</html>




   