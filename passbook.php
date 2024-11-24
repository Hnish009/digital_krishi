<!-- C:\xampp\htdocs\digital_krishi\passbook.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Farmer Passbook</title>
</head>
<body>
    <div class="container">
        <h1>Farmer Passbook</h1>
        <form action="passbook.php" method="POST">
            <div class="form-group">
                <label for="farmer_phone">Enter Farmer Phone Number:</label>
                <input type="text" name="farmer_phone" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">View Passbook</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $servername = "localhost";
            $username = "root"; // default XAMPP username
            $password = ""; // default XAMPP password
            $dbname = "digital_krishi"; // Your database name

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $phone_number = $_POST['farmer_phone'];

            // Fetch transactions for the given phone number
            $sql = "SELECT * FROM transactions WHERE phone_number='$phone_number'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<h2>Transaction History for Phone Number: $phone_number</h2>";
                echo "<table class='table'>";
                echo "<thead><tr><th>ID</th><th>Phone Number</th><th>Amount</th></tr></thead><tbody>";
                
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['id']}</td>
                            <td>{$row['phone_number']}</td>
                            <td>{$row['amount']}</td>
                          </tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "No transactions found for this phone number.";
            }

            $conn->close();
        }
        ?>
    </div>
</body>
</html>