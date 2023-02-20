<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Update Customer Record</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#customer_id").on("change", function() {
                var id = $(this).val();
                if (id) {
                    $.ajax({
                        url: "get_customer_info.php",
                        type: "POST",
                        data: {id: id},
                        dataType: "json",
                        success: function(data) {
                            $("#first_name").val(data.first_name);
                            $("#last_name").val(data.last_name);
                            $("#email").val(data.email);
                            $("#phone_number").val(data.phone_number);
                            $("#address").val(data.address);
                        },
                        error: function(xhr, status, error) {
                            console.log("Error: " + error);
                        }
                    });
                } else {
                    $("#first_name").val("");
                    $("#last_name").val("");
                    $("#email").val("");
                    $("#phone_number").val("");
                    $("#address").val("");
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
            padding: 50px;
            border-radius: 4px;
            margin-top: 20px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        a:hover {
            background-color: #FFFFFF;
            color: #000000;
        }
    </style>
</head>
<body>
<form method="post" action="update_customer_connect.php"> 
<div style="text-align:center; font-size:1.5em; font-weight:bold;">Update Customer Records</div><br>
    <div style="display:flex; flex-direction:column; align-items:center;">
        <label for="customer_id" style="font-size:1.2em; margin-bottom:20px;">Customer ID:</label>
        <select name="customer_id" id="customer_id" style="padding:5px; font-size:1.0em;">
            <option value="">-- Select a customer --</option>
            <?php
            // Connect to the database
            $conn = new mysqli("localhost", "root", "", "sadmini1");
            
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

             // Get a list of customer IDs from the database
             $sql = "SELECT customer_id FROM Customer";
             $result = mysqli_query($conn, $sql);
             
            // Loop through the results and create an option for each customer record
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['customer_id'] . "'>" . $row['customer_id'] . "</option>";
            }

            // Close the database connection
            mysqli_close($conn);
            ?>
        </select>          
            <div style="display:flex; flex-direction:column; width:300px; margin-bottom:25px;">
                <label for="first_name" style="font-size:1.2em; margin-bottom:10px;">First Name:</label>
                <input type="text" name="first_name" id="first_name" style="padding:10px; font-size:1.2em;">
            </div>

            <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
                <label for="last_name" style="font-size:1.2em; margin-bottom:10px;">Last Name:</label>
                <input type="text" name="last_name" id="last_name" style="padding:10px; font-size:1.2em;">
            </div>

            <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
                <label for="email" style="font-size:1.2em; margin-bottom:10px;">Email:</label>
                <input type="text" name="email" id="email" style="padding:10px; font-size:1.2em;">
            </div>

            <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
                <label for="phone_number" style="font-size:1.2em; margin-bottom:10px;">Phone Number:</label>
                <input type="text" name="phone_number" id="phone_number" style="padding:10px; font-size:1.2em;">
            </div>
              
            <div style="display:flex; flex-direction:column; width:300px; margin-bottom:20px;">
                <label for="address" style="font-size:1.2em; margin-bottom:10px;">Address:</label>
                <textarea name="address" id="address" rows="3" style="padding:10px; font-size:1.2em;"></textarea>
            </div>


        <button type="submit" style="padding:10px; font-size:1.2em; background-color:#4CAF50; color:white; border:none; border-radius:5px;">Update Record</button>
    </div>
</form>
</body>
<a href="index.html">Back to Home</a>
</html>



