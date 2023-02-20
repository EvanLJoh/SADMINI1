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
  <title>Add New Inventory</title>
</head>
<body>
  <h1>Add New Inventory</h1>
  <form action="Inventoryconnect.php" method="post">
    <table>
      <tr>
        <td><label for="product_id">Factory Order ID:</label></td>
        <td><input type="text" id="product_id" name="product_id" required></td>
      </tr>
      <tr>
        <td><label for="P_INSTOCK">In Stock:</label></td>
        <td><input type="text" id="P_INSTOCK" name="P_INSTOCK" required></td>
      </tr>
      <tr>
        <td><label for="P_QOH">Quantity On Hand:</label></td>
        <td><input type="text" id="P_QOH" name="P_QOH" required></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" value="Submit"></td>
      </tr>
    </table>
  </form> 
  <a href="index.html">Back to Home</a>
  <div style="margin-top: 100px">
    <iframe src="factory_orders_details.php" width="100%" height="400px" scrolling="yes" frameborder="0" allowtransparency="true"></iframe>
  </div>
  <div>
    <button class="zoom-in">+</button>
    <button class="zoom-out">-</button>
  </div>
  <script>
    const iframe = document.querySelector('iframe');
    const zoomInButton = document.querySelector('.zoom-in');
    const zoomOutButton = document.querySelector('.zoom-out');

    let zoomLevel = 1;

    zoomInButton.addEventListener('click', function () {
      if (zoomLevel > 3) { return; }

      zoomLevel += 0.25;
      iframe.style.transform = `scale(${zoomLevel})`;
    });

    zoomOutButton.addEventListener('click', function () {
      if (zoomLevel < 0.25) { return; }

      zoomLevel -= 0.25;
      iframe.style.transform = `scale(${zoomLevel})`;
    });
  </script>
</body>
</html>