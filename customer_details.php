
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Customer Information </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
       <style>
	    h1 {
			text-align: center;
            font-family: 'Times New Roman', Times, serif;
			font-size: 50px;
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
        <h1>Customer Information</h1>
        <table style="width:60%; border: 1px solid black;">
            <head>
                <tr>
                    <th style='border: 1px solid black;text-align: center;'>Customer ID</th>
                    <th style='border: 1px solid black;text-align: center;'>First Name</th>
                    <th style='border: 1px solid black;text-align: center;'>Last Name</th>
                    <th style='border: 1px solid black;text-align: center;'>Address</th>
                    <th style='border: 1px solid black;text-align: center;'>Email</th>
                    <th style='border: 1px solid black;text-align: center;'>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Create connection
                    $conn = new mysqli("localhost", "root", "", "sadmini1");
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    } 

                    $sql = "SELECT * FROM Customer";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                        echo 
                    "<tr>
                         <td style='border: 1px solid black;text-align: center;'>" . $row['customer_id'] . "</td>
                         <td style='border: 1px solid black;text-align: center;'>" . $row['first_name'] . "</td>
                         <td style='border: 1px solid black;text-align: center;'>" . $row['last_name'] . "</td>
                         <td style='border: 1px solid black;text-align: center;'>" . $row['address'] . "</td>
                         <td style='border: 1px solid black;text-align: center;'>" . $row['email'] . "</td>
                         <td style='border: 1px solid black;text-align: center;'>" . $row['phone_number'] . "</td>
                    </tr>";
                    }

                   
                } else {
                    echo "0 results";
                }   
                $conn->close();
                ?>
            </tbody>
        </table>
        <a href="index.html">Back to Home</a>
    </body>
</html>