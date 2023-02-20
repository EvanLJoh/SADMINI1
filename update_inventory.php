<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Inventory Record</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#inventory_id").on("change", function() {
                var id = $(this).val();
                if (id) {
                    $.ajax({
                        url: "get_inventory_info.php",
                        type: "POST",
                        data: {id: id},
                        dataType: "json",
                        success: function(data) {
                            $("#product_id").val(data.product_id);
                            $("#P_INSTOCK").val(data.P_INSTOCK);
                            $("#P_QOH").val(data.P_QOH);
                        },
                        error: function(xhr, status, error) {
                            console.log("Error: " + error);
                        }
                    });
                } else {
                    $("#product_id").val("");
                    $("#P_INSTOCK").val("");
                    $("#P_QOH").val("");
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
<form method="post" action="update_inventory_connect.php">
    <div style="text-align:center; font-size:1.5em; font-weight:bold;">Update Inventory Record</div><br>
    <div style="display:flex; flex-direction:column; align-items:center;">
        <label for="inventory_id" style="font-size:1.2em; margin-bottom:10px;">Select Inventory ID:</label>
        <select name="inventory_id" id="inventory_id" style="padding:10px; font-size:1.2em; width:300px; margin-bottom:20px;">
            <?php
            // Connect to the database
            $conn = new mysqli("localhost", "root", "", "sadmini1");
            
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            
            // Get a list of inventory IDs from the database
            $sql = "SELECT inventory_id FROM Inventory";
            $result = mysqli_query($conn, $sql);
            
        
            // Loop through the results and create an option for each inventory record
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['inventory_id'] . "'>" . $row['inventory_id'] . "</option>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </select>
        <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
            <label for="product_id" style="font-size:1.2em; margin-bottom:10px;">Product ID:</label>
            <input type="text" name="product_id" id="product_id" style="padding:10px; font-size:1.2em;">
        </div>

        <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
            <label for="P_INSTOCK" style="font-size:1.2em; margin-bottom:10px;">Product In Stock:</label>
            <input type="text" name="P_INSTOCK" id="P_INSTOCK" style="padding:10px; font-size:1.2em;">
        </div>

        <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
            <label for="P_QOH" style="font-size:1.2em; margin-bottom:10px;">Product Quantity On Hand:</label>
            <input type="text" name="P_QOH" id="P_QOH" style="padding:10px; font-size:1.2em;">
        </div>

        <button type="submit" style="padding:10px; font-size:1.2em; background-color:#4CAF50; color:white; border:none; border-radius:5px;">Update Record</button>
    </div>
</form>
</body>
<a href="index.html">Back to Home</a>
</html>