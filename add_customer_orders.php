<!DOCTYPE html>
<html>
<head>
    <title>Customer Order Form</title>
    <style>
		h1 {
			text-align: center;
			font-family: Arial, sans-serif;
			font-size: 28px;
			color: #000000;
		}
		form {
			text-align: center;
			margin: auto;
		}
		table {
			width: 500px;
			margin: auto;
			border-collapse: collapse;
			border: 1px solid #000000;
		}
		td {
			padding: 10px;
			border: 1px solid #000000;
		}
		input {
			width: 100%;
			height: 25px;
			font-family: Arial, sans-serif;
			font-size: 14px;
		}
		input[type="submit"] {
			background-color: #000000;
			color: #FFFFFF;
			font-weight: bold;
			border-radius: 4px;
			cursor: pointer;
			padding: 50px;
		}
		input[type="submit"]:hover {
			background-color: #FFFFFF;
			color: #000000;
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
    <h1>Customer Order Form</h1>
    <form action="process_order.php" method="post">
    <head>
    <title>Order Form</title>
</head>
<body>
<form action="process_order.php" method="post">
  <table>
    <tr>
      <td><label for="email">Email:</label></td>
      <td><input type="email" id="email" name="email" required placeholder="Enter your email address"></td>
    </tr>
    <tr>
      <td><label for="OrderDetails">Product ID:</label></td>
      <td><input type="text" id="OrderDetails" name="OrderDetails" minlength="0" maxlength="10" required></td>
    </tr>
    <tr>
      <td><label for="quantity">Quantity:</label></td>
      <td><input type="text" id="quantity" name="quantity" required></td>
    </tr>
    <tr>
      <td><label for="card_number">Card Number:</label></td>
      <td><input type="number" id="card_number" name="card_number" inputmode="numeric" minlength="16" maxlength="16" placeholder="Enter your 16 digit card number"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" value="Submit Order"></td>
    </tr>
  </table>
</form>
</body>
    <a href="index.html">Back to Home</a>
</body>





