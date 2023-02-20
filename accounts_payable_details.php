<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>Accounts Payable Details with Factory Data</title>
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
        <h1>Accounts Payable Details with Factory Data</h1>
        <table style="width:60%; border: 1px solid black;">
            <tr>
                <th style='border: 1px solid black;text-align: center; text-align: center;'>Invoice Number</th>   
                <th style='border: 1px solid black;text-align: center; text-align: center;'>Payment Due Date</th>
                <th style='border: 1px solid black;text-align: center; text-align: center;'>Payment Amount</th>
                <th style='border: 1px solid black;text-align: center; text-align: center;'>Factory Name</th>
                <th style='border: 1px solid black;text-align: center; text-align: center;'>Factory Phone</th>
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
FactoryOrders.PaymentDueDate,FactoryOrders.f_order_id,
f.f_name,
f.f_phone_number
FROM 
Products 
Right JOIN 
FactoryOrders ON Products.P_ID = FactoryOrders.Product_ID
Right JOIN
Accounts_Payable a ON a.OrderDetails = FactoryOrders.f_order_id
Right JOIN 
Products p ON FactoryOrders.product_id = p.p_id
Right JOIN 
Factory f ON p.f_id = f.f_id;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo 
 "<tr>
 <td style='border: 1px solid black;text-align: center;'>" . $row["Factory.f_order_id"]. "</td>    
 <td style='border: 1px solid black;text-align: center;'>" . $row["PaymentDueDate"]. "</td>
      <td style='border: 1px solid black;text-align: center;'>" . number_format($row["Price"],2) . "</td>
      <td style='border: 1px solid black;text-align: center;'>" . $row["f_name"] . "</td>
      <td style='border: 1px solid black;text-align: center;'>" . $row["f_phone_number"] . "</td>
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