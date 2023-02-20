<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Customer Order</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#Cust_order_id").on("change", function() {
                var id = $(this).val();
                if (id) {
                    $.ajax({
                        url: "get_order_details.php",
                        type: "POST",
                        data: {id: id},
                        dataType: "json",
                        success: function(data) {
                            $("#OrderDetails").val(data.OrderDetails);
                            $("#quantity").val(data.quantity);
                            $("#customer_email").val(data.customer_email);
                            $("#card_number").val(data.card_number);
                        },
                        error: function(xhr, status, error) {
                            console.log("Error: " + error);
                        }
                    });
                } else {
                    $("#OrderDetails").val("");
                    $("#quantity").val("");
                    $("#customer_email").val("");
                    $("#card_number").val("");
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
            margin-top: 20
        }
        a:hover {
            background-color: #FFFFFF;
            color: #000000;
        }
    </style>
</head>
<body>
<form method="post" action="update_customerorders_connect.php">
<div style="text-align:center; font-size:1.5em; font-weight:bold;">Update Customer Order Records</div><br>
    <div style="display:flex; flex-direction:column; align-items:center;">
        <label for="Cust_order_id" style="font-size:1.2em; margin-bottom:10px;">Select Customer Order ID:</label>
        <select name="Cust_order_id" id="Cust_order_id" style="padding:10px; font-size:1.2em; width:300px; margin-bottom:20px;">
            <?php
            // Connect to the database
            $conn = new mysqli("localhost", "root", "", "sadmini1");
            
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

             // Get a list of inventory IDs from the database
             $sql = "SELECT Cust_order_id FROM CustomerOrders";
             $result = mysqli_query($conn, $sql);
             
            // Loop through the results and create an option for each inventory record
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['Cust_order_id'] . "'>" . $row['Cust_order_id'] . "</option>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </select>
        <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
            <label for="OrderDetails" style="font-size:1.2em; margin-bottom:10px;">OrderDetails:</label>
            <input type="text" name="OrderDetails" id="OrderDetails" style="padding:10px; font-size:1.2em;">
        </div>

        <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
            <label for="quantity" style="font-size:1.2em; margin-bottom:10px;">Quantity:</label>
            <input type="text" name="quantity" id="quantity" style="padding:10px; font-size:1.2em;">
        </div>

        <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
            <label for="customer_email" style="font-size:1.2em; margin-bottom:10px;">Customer Email :</label>
            <input type="text" name="customer_email" id="customer_email" style="padding:10px; font-size:1.2em;" readonly>
            <p style="font-size:0.8em; color:red; margin-top:5px;">This field is restricted and cannot be edited.</p>
        </div>

        <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
            <label for="card_number" style="font-size:1.2em; margin-bottom:10px;">Card Number :</label>
            <input type="text" id="card_number" name="card_number" inputmode="numeric" minlength="16" maxlength="16" placeholder="Enter your 16 digit card number" style="padding:10px; font-size:1.2em;">
        </div>


        <button type="submit" style="padding:10px; font-size:1.2em; background-color:#4CAF50; color:white; border:none; border-radius:5px;">Update Record</button>
    </div>
</form>
</body>
<a href="index.html">Back to Home</a>
</html>