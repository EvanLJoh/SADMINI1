<!DOCTYPE html>
<html>
<head>
    <title>Customer Orders</title>
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
			border: 10px solid #000000;
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
    <h1>Customer Orders</h1>
    <table style="width:60%; border: 1px solid black;">
    <tr>
        <th style='border: 1px solid black;text-align: center;'>Customer Order ID</th>
        <th style='border: 1px solid black;text-align: center;'>ProductID</th>
        <th style='border: 1px solid black;text-align: center;'>Name</th>
        <th style='border: 1px solid black;text-align: center;'>Brand</th>
        <th style='border: 1px solid black;text-align: center;'>Product Type</th>
        <th style='border: 1px solid black;text-align: center;'>Quantity</th>
        <th style='border: 1px solid black;text-align: center; text-align: center;'>Payment Amount</th>
        <th style='border: 1px solid black;text-align: center;'>PaymentDueDate</th>
        <th style='border: 1px solid black;text-align: center;'> Payment Status?</th>
        <th style='border: 1px solid black;text-align: center;'>Customer ID</th>
        <th style='border: 1px solid black;text-align: center;'>First Name</th>
        <th style='border: 1px solid black;text-align: center;'>Last Name</th>
        <th style='border: 1px solid black;text-align: center;'>Email</th>
        <th style='border: 1px solid black;text-align: center;'>Phone Number</th>
    </tr>

    <?php 
  // Create connection
  $conn = new mysqli("localhost", "root", "", "sadmini1");
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  $sql = "SELECT 
  Products.P_Price * CustomerOrders.quantity AS Price,
  CustomerOrders.Cust_order_id, Products.P_ID, Products.P_NAME, Products.P_Brand, 
  Products.P_Type, CustomerOrders.quantity, CustomerOrders.PaymentDueDate,
  Customer.customer_id, Customer.first_name, Customer.last_name, 
  Customer.email, Customer.phone_number,
  CustomerOrders.card_number
  FROM CustomerOrders 
  JOIN Customer ON Customer.email = CustomerOrders.customer_email
  JOIN Inventory ON CustomerOrders.OrderDetails = Inventory.inventory_id
  JOIN Products ON inventory.product_id = Products.P_ID
  ORDER BY CustomerOrders.Cust_order_id;";


$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
       // output data of each row
    while($row = mysqli_fetch_assoc($result)){
        // Determine the value of the "Order Paid?" column
        if ($row["card_number"] != null && $row["card_number"] != "") {
            $order_paid = "Paid";
            $paid_style = "color:green";
        } else {
            $order_paid = "Unpaid";
            $paid_style = "color:red";
        }
        echo 
    "<tr>
        <td style='border: 1px solid black;text-align: center;'>" . $row["Cust_order_id"]. "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["P_ID"]. "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["P_NAME"] . "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["P_Brand"] . "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["P_Type"] . "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["quantity"] . "</td>
        <td style='border: 1px solid black;text-align: center;'>" . number_format($row["Price"],2) . "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["PaymentDueDate"] . "</td>
        <td style='border: 1px solid black;text-align: center;" . $paid_style . "'>" . $order_paid . "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["customer_id"] . "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["first_name"] . "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["last_name"] . "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["email"] . "</td>
        <td style='border: 1px solid black;text-align: center;'>" . $row["phone_number"] . "</td>
    </tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</table>
<a href="index.html">Back to Home</a>
</body>
</html> 
