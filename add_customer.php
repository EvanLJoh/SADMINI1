<!DOCTYPE HTML>
<HTML>
  <head>
    <title>Add New Factory</title>
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
    <h1>Add New Customer</h1>
    <form action="ConnectAddCustomer.php" method="post">
  <table>
    <tr>
      <td><label for="email">Email:</label></td>
      <td><input type="email" id="email" name="email" required></td>
    </tr>
    <tr>
      <td><label for="first_name">First Name:</label></td>
      <td><input type="text" id="first_name" name="first_name" required></td>
    </tr>
    <tr>
      <td><label for="last_name">Last Name:</label></td>
      <td><input type="text" id="last_name" name="last_name" required></td>
    </tr>
    <tr>
      <td><label for="address">Address:</label></td>
      <td><input type="text" id="address" name="address" required></td>
    </tr>
    <tr>
      <td><label for="phone_number">Phone Number:</label></td>
      <td><input type="tel" id="phone_number" name="phone_number" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required></td>
    </tr>
    <tr>
      <td><label for="date_of_birth">Date of Birth:</label></td>
      <td><input type="date" id="date_of_birth" name="date_of_birth"></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" value="Submit"></td>
    </tr>
  </table>
</form>

    <a href="index.html">Back to Home</a>
  </body>
</html>