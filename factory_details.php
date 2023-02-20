

<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data from Factory Table</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
	<style>
		h1 {
			text-align: center;
            font-family: 'Times New Roman', Times, serif;
			font-size: 40=px;
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
    <h1>Data from Factory Table</h1>
    <table style="width:60%; border: 1px solid black;">
      <tr>
        <th style="border: 1px solid black;text-align: center;">Factory ID</th>
        <th style="border: 1px solid black;text-align: center;">Name</th>
        <th style="border: 1px solid black;text-align: center;">Country</th>
        <th style="border: 1px solid black;text-align: center;">City</th>
        <th style="border: 1px solid black;text-align: center;">State/Providence</th>
        <th style="border: 1px solid black;text-align: center;">Zipcode</th>
        <th style="border: 1px solid black;text-align: center;">Phone Number</th>
      </tr>
      <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sadmini1";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT f_id, f_name, f_country, f_city,f_state_providence,f_zipcode, f_phone_number FROM Factory";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "
            <tr>
                <td style='border: 1px solid black;text-align: center;'>" . $row["f_id"]. "</td>
                <td style='border: 1px solid black;text-align: center;'>" . $row["f_name"]. "</td>
                <td style='border: 1px solid black;text-align: center;'>" . $row["f_country"]. "</td>
                <td style='border: 1px solid black;text-align: center;'>" . $row["f_city"]. "</td>
                <td style='border: 1px solid black;text-align: center;'>" . $row["f_state_providence"]. "</td>
                <td style='border: 1px solid black;text-align: center;'>" . $row["f_zipcode"]. "</td>
                <td style='border: 1px solid black;text-align: center;'>" . $row["f_phone_number"]. "</td>
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