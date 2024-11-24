<?php
   error_reporting(E_ALL);
   ini_set('display_errors', 1);
   session_start();
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Admin Panel</title>
</head>
<body>
    <div class="container">
        <h1>Admin Panel</h1>
        <h2>Farmers Data</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>State</th>
                    <th>District</th>
                    <th>Village</th>
                    <th>Area</th>
                    <th>Soil Type</th>
                    <th>Budget</th>
                    <th>Manpower</th>
                    <th>Phone Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $conn = new mysqli("localhost", "root", "", "digital_krishi");
                $sql = "SELECT * FROM farmers";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['name']}</td>
                                <td>{$row['state']}</td>
                                <td>{$row['district']}</td>
                                <td>{$row['village']}</td>
                                <td>{$row['area']}</td>
                                <td>{$row['soil_type']}</td>
                                <td>{$row['budget']}</td>
                                <td>{$row['manpower']}</td>
                                <td>{$row['phone_number']}</td>
                              </tr>";
                    }
                }
                $conn->close();
                ?>
            </tbody>
        </table>

        <h2>Add Credits to Farmer</h2>
        <form action="add_credits.php" method="POST">
            <div class="form-group">
                <label for="phone_number">Farmer Phone Number:</label>
                <input type="text" name="phone_number" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount to Credit:</label>
                <input type="number" name="amount" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Credits</button>
        </form>
    </div>
</body>
</html>