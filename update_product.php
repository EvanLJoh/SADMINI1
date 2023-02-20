<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Product Record</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#id").on("change", function() {
                var id = $(this).val();
                if (id) {
                    $.ajax({
                        url: "get_product_info.php",
                        type: "POST",
                        data: {id: id},
                        dataType: "json",
                        success: function(data) {
                            $("#P_NAME").val(data.P_NAME);
                            $("#P_Brand").val(data.P_Brand);
                            $("#P_Type").val(data.P_Type);
                            $("#P_DATE").val(data.P_DATE);
                            $("#P_PRICE").val(data.P_PRICE);
                            $("#F_ID").val(data.F_ID);
                            
                        },
                        error: function(xhr, status, error) {
                            console.log("Error: " + error);
                        }
                    });
                } else {
                    $("#P_NAME").val("");
                    $("#P_Brand").val("");
                    $("#P_Type").val("");
                    $("#P_DATE").val("");
                    $("#P_PRICE").val("");
                    $("#F_ID").val("");
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
    <form method="post" action="update_producttable.php">
        <div style="text-align:center; font-size:1.5em; font-weight:bold;">Update Product Record</div><br>
        <div style="display:flex; flex-direction:column; align-items:center;">
            <label for="id" style="font-size:1.2em; margin-bottom:10px;">Select Product Name:</label>
            <select name="id" id="id" style="padding:10px; font-size:1.2em; width:300px; margin-bottom:20px;">
                <?php
                // Connect to the database
                $conn = new mysqli("localhost", "root", "", "sadmini1");

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Get a list of product IDs and names from the database
                $sql = "SELECT p_id, p_name FROM products";
                $result = mysqli_query($conn, $sql);

                // Loop through the results and create an option for each product
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='" . $row['p_id'] . "'>" . $row['p_name'] . "</option>";
                }

                // Close the database connection
                mysqli_close($conn);
                ?>
           
           </select>
           
           <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
                <label for="P_NAME" style="font-size:1.2em;">Product Name:</label>
                <input type="text" name="P_NAME" id="P_NAME" style="padding:10px; font-size:1.2em;">
            </div>

            <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
                <label for="P_Brand" style="font-size:1.2em;">Product Brand:</label>
                <input type="text" name="P_Brand" id="P_Brand" style="padding:10px; font-size:1.2em;">
            </div>

            <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
                <label for="P_Type" style="font-size:1.2em;">Product Type:</label>
                <input type="text" name="P_Type" id="P_Type" style="padding:10px; font-size:1.2em;">
            </div>

            <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
                <label for="P_DATE" style="font-size:1.2em;">Product Date:</label>
                <input type="date" name="P_DATE" id="P_DATE" style="padding:10px; font-size:1.2em;">
            </div>

            <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
                <label for="P_PRICE" style="font-size:1.2em;">Product Price:</label>
                <input type="text" name="P_PRICE" id="P_PRICE" style="padding:10px; font-size:1.2em;">
            </div>

            <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
                <label for="F_ID" style="font-size:1.2em;">Factory ID:</label>
                <input type="text" name="F_ID" id="F_ID" style="padding:10px; font-size:1.2em;">
            </div>
                <button type="submit" style="padding:10px; font-size:1.2em; background-color:#4CAF50; color:white; border:none; border-radius:5px;">Update Record</button>
            </div>
    </form>
</body>
<a href="index.html">Back to Home</a>
</html>


