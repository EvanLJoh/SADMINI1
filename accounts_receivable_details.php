<!DOCTYPE html>
<html>
<head>
    
    <title>Accounts Receivable </title>
    <style>
        h1 {
			text-align: center;
            font-family: 'Times New Roman', Times, serif;
			font-size: 40px;
			color: #000000;
		}
		table {
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
    <h1>Accounts Receivable</h1>
    <table style="width:60%; border: 1px solid black;">
        <tr>
            <th style='border: 1px solid black;text-align: center;'>Accounts Receivable ID</th>
            <th style='border: 1px solid black;text-align: center;'>Customer ID</th>
            <th style='border: 1px solid black;text-align: center;'>First Name</th>
            <th style='border: 1px solid black;text-align: center;'>Last Name</th>
            <th style='border: 1px solid black;text-align: center;'>Email</th>
            <th style='border: 1px solid black;text-align: center;'>Phone Number</th>
            <th style='border: 1px solid black;text-align: center;'>Payment Due Date</th>
            <th style='border: 1px solid black;text-align: center;'>Transaction Date</th>
            <th style='border: 1px solid black;text-align: center;'>Payment Amount</th>
            <th style='border: 1px solid black;text-align: center;'>Invoice Number</th>
            <th style='border: 1px solid black;text-align: center;'>Order Details</th>
        </tr>
        <?php 

        // Create connection
        $conn = new mysqli("localhost", "root", "", "sadmini1");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
    
        $sql = "SELECT ar.ar_id, ar.cust_id, c.first_name, 
        c.last_name, c.email, c.phone_number, ar.cust_pay_due_date,
        ar.cust_transaction_date, ar.cust_PaymentAmount, ar.cust_invoice_number, 
        ar.cust_Order_Details 
        FROM Accounts_Receivable ar 
        JOIN Customer c ON ar.cust_id = c.customer_id";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
             // output data of each row
        while($row = $result->fetch_assoc()) {
            echo
         "<tr>
             <td style='border: 1px solid black;text-align: center;'>" . $row['ar_id'] . "</td>
             <td style='border: 1px solid black;text-align: center;'>" . $row['cust_id'] . "</td>
             <td style='border: 1px solid black;text-align: center;'>" . $row['first_name'] . "</td>
             <td style='border: 1px solid black;text-align: center;'>" . $row['last_name'] . "</td>
             <td style='border: 1px solid black;text-align: center;'>" . $row['email'] . "</td>
             <td style='border: 1px solid black;text-align: center;'>" . $row['phone_number'] . "</td>
             <td style='border: 1px solid black;text-align: center;'>" . $row['cust_pay_due_date'] . "</td>
             <td style='border: 1px solid black;text-align: center;'>" . $row['cust_transaction_date'] . "</td>
             <td style='border: 1px solid black;text-align: center;'>" . $row['cust_PaymentAmount'] . "</td>
             <td style='border: 1px solid black;text-align: center;'>" . $row['cust_invoice_number'] . "</td>
             <td style='border: 1px solid black;text-align: center;'>" . $row['cust_Order_Details'] . "</td>
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