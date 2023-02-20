<!DOCTYPE html>
<html>
  <head>
    <title>Add New Factory Order</title>
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
<!DOCTYPE html>
<html>
  <head>
    <title>Add New Factory Order</title>
  </head>
  <body>
    <h1>Add New Factory Order</h1>
    <form action="FactoryOrderconnect.php" method="post">
      <table>
        <tr>
          <td><label for="Product_ID">Product ID:</label></td>
          <td><input type="text" id="Product_ID" name="Product_ID" minlength="0" maxlength="10" required></td>
        </tr>
        <tr>
          <td><label for="Quantity">Quantity:</label></td>
          <td><input type="text" id="Quantity" name="Quantity" required></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form> 
    <a href="index.html">Back to Home</a>
  </body>
</html>