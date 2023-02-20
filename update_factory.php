<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Factory Record</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#id").on("change", function() {
                var id = $(this).val();
                if (id) {
                    $.ajax({
                        url: "get_factory_info.php",
                        type: "POST",
                        data: {id: id},
                        dataType: "json",
                        success: function(data) {
                            $("#name").val(data.f_name);
                            $("#country").val(data.f_country);
                            $("#city").val(data.f_city);
                            $("#state_providence").val(data.f_state_providence);
                            $("#zipcode").val(data.f_zipcode);
                            $("#phone_number").val(data.f_phone_number);
                        },
                        error: function(xhr, status, error) {
                            console.log("Error: " + error);
                        }
                    });
                } else {
                    $("#name").val("");
                    $("#country").val("");
                    $("#city").val("");
                    $("#state_providence").val("");
                    $("#zipcode").val("");
                    $("#phone_number").val("");
                }
            });
        });
    </script>
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
    <form method="post" action="update_factorytable.php">
    <div style="text-align:center; font-size:1.5em; font-weight:bold;">Update Factory Record</div><br>
    <div style="display:flex; flex-direction:column; align-items:center;">
        <label for="id" style="font-size:1.2em; margin-bottom:10px;">Select Factory ID:</label>
        <select name="id" id="id" style="padding:10px; font-size:1.2em; width:300px; margin-bottom:20px;">
            <?php
            // Connect to the database
            $conn = new mysqli("localhost", "root", "", "sadmini1");

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Get a list of factory IDs and names from the database
            $sql = "SELECT f_id, f_name FROM Factory";
            $result = mysqli_query($conn, $sql);

            // Loop through the results and create an option for each factory
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['f_id'] . "'>" . $row['f_name'] . "</option>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </select>

        <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
            <label for="name" style="font-size:1.2em;">Factory Name:</label>
            <input type="text" name="name" id="name" style="padding:10px; font-size:1.2em;">
        </div>

        <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
            <label for="country" style="font-size:1.2em;">Factory Country:</label>
            <input type="text" name="country" id="country" style="padding:10px; font-size:1.2em;">
        </div>

        <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
            <label for="city" style="font-size:1.2em;">Factory City:</label>
            <input type="text" name="city" id="city" style="padding:10px; font-size:1.2em;">
        </div>

        <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
            <label for="state_providence" style="font-size:1.2em;">Factory State/Providence:</label>
            <input type="text" name="state_providence" id="state_providence" style="padding:10px; font-size:1.2em;">
        </div>

        <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
            <label for="zipcode" style="font-size:1.2em;">Factory Zipcode:</label>
            <input type="text" name="zipcode" id="zipcode" style="padding:10px; font-size:1.2em;">
        </div>

        <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
            <label for="phone_number" style="font-size:1.2em;">Factory Phone Number:</label>
            <input type="text" name="phone_number" id="phone_number" style="padding:10px; font-size:1.2em;">
        </div>
        <button type="submit" style="padding:10px; font-size:1.2em; background-color:#4CAF50; color:white; border:none; border-radius:5px;">Update Record</button>
</div>

</body>
<a href="index.html">Back to Home</a>
</html>


