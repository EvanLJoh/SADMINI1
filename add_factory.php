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
    <h1>Add New Factory</h1>
    <form action="Factoryconnect.php" method="post">
      <table>
        <tr>
          <td><label for="f_id">Factory ID:</label></td>
          <td><input type="text" id="f_id" name="f_id" minlength="0" maxlength="10" required></td>
        </tr>
        <tr>
          <td><label for="f_name">Name:</label></td>
          <td><input type="text" id="f_name" name="f_name" required></td>
        </tr>
        <tr>
          <td><label for="f_country">Country:</label></td>
          <td><input type="text" id="f_country" name="f_country" required></td>
        </tr>
        <tr>
          <td><label for="f_city">City:</label></td>
          <td><input type="text" id="f_city" name="f_city" required></td>
        </tr>
        <tr>
          <td><label for="f_state">State/Providence:</label></td>
          <td><input type="text" id="f_state_providence" name="f_state_providence" minlength="0" maxlength="20"required></td>
        </tr>
        <tr>
          <td><label for="f_zipcode">Zipcode:</label></td>
          <td><input type="text" id="f_zipcode" name="f_zipcode" minlength="5" maxlength="10" required></td>
        </tr>
        <tr>
          <td><label for="f_phone_number">Phone Number:</label></td>
          <td><input type="tel" id="f_phone_number" name="f_phone_number" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form> 
    <a href="index.html">Back to Home</a>
  </body>
</html>