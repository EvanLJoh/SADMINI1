<!DOCTYPE HTML>
<HTML>
  <head>
    <title>Add New Product</title>
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
    <title>Add New Product</title>
  </head>
  <body>
    <h1>Add New Product</h1>
    <form action="Productconnect.php" method="post">
      <table>
        <tr>
          <td><label for="P_NAME">Name:</label></td>
          <td><input type="text" id="P_NAME" name="P_NAME" required></td>
        </tr>
        <tr>
          <td><label for="P_Brand">Brand:</label></td>
          <td><input type="text" id="P_Brand" name="P_Brand" required></td>
        </tr>
        <tr>
          <td><label for="P_Type">Type:</label></td>
          <td><input type="text" id="P_Type" name="P_Type" required></td>
        </tr>
  <tr>
          <td><label for="P_DATE">Date:</label></td>
          <td><input type="date" id="P_DATE" name="P_DATE" required pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}" title="Date must be in the form MM-DD-YYYY"></td>
        </tr>
          <td><label for="P_PRICE">Price:</label></td>
          <td><input type="text" id="P_PRICE" name="P_PRICE" required></td>
        </tr>
        <tr>
          <td><label for="F_ID">Factory ID:</label></td>
          <td><input type="text" id="F_ID" name="F_ID" minlength="0" maxlength="10" required></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" value="Submit"></td>
        </tr>
      </table>
    </form> 
    <a href="index.html">Back to Home</a>
  </body>
</html>
