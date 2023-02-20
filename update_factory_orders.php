<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Factory Order Record</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#f_order_id").on("change", function() {
                var id = $(this).val();
                if (id) {
                    $.ajax({
                        url: "get_factory_order_info.php",
                        type: "POST",
                        data: {id: id},
                        dataType: "json",
                        success: function(data) {
                            $("#product_id").val(data.product_id);
                            $("#quantity").val(data.quantity);
                            $("#PaymentDueDate").val(data.PaymentDueDate);
                        },
                        error: function(xhr, status, error) {
                            console.log("Error: " + error);
                        }
                    });
                } else {
                    $("#product_id").val("");
                    $("#quantity").val("");
                    $("#PaymentDueDate").val("");
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
    <form method="post" action="update_factory_order.php">
        <div style="text-align:center; font-size:1.5em; font-weight:bold;">Update Factory Order Record</div><br>
        <div style="display:flex; flex-direction:column; align-items:center;">
            <label for="f_order_id" style="font-size:1.2em; margin-bottom:10px;">Select Factory Order ID:</label>
            <select name="f_order_id" id="f_order_id" style="padding:10px; font-size:1.2em; width:300px; margin-bottom:20px;">
                <?php
                // Connect to the database
                $conn = new mysqli("localhost", "root", "", "sadmini1");

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Get a list of factory order IDs from the database
                $sql = "SELECT f_order_id FROM FactoryOrders";
                $result = mysqli_query($conn, $sql);

                // Loop through the results and create an option for each factory order
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['f_order_id'] . "'>" . $row['f_order_id'] . "</option>";
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
            <label for="quantity" style="font-size:1.2em; margin-bottom:10px;">Quantity:</label>
            <input type="text" name="quantity" id="quantity" style="padding:10px; font-size:1.2em;">
        </div>

        <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
            <label for="PaymentDueDate" style="font-size:1.2em; margin-bottom:10px;">Payment Due Date:</label>
            <input type="date" name="PaymentDueDate" id="PaymentDueDate" style="padding:10px; font-size:1.2em;">
        </div>
        <button type="submit" style="padding:10px; font-size:1.2em; background-color:#4CAF50; color:white; border:none; border-radius:5px;">Update Record</button>

</form>
</body>
<a href="index.html">Back to Home</a>
</html>