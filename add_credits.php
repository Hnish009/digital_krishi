<?php
// D:\xampp\htdocs\digital_krishi\add_credits.php
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password
$dbname = "digital_krishi"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone_number = $_POST['phone_number'];
    $amount = $_POST['amount'];

    // Check if the farmer exists
    $sql = "SELECT budget FROM farmers WHERE phone_number='$phone_number'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Farmer exists, update the budget
        $farmer = $result->fetch_assoc();
        $new_budget = $farmer['budget'] + $amount;

        $update_sql = "UPDATE farmers SET budget='$new_budget' WHERE phone_number='$phone_number'";
        if ($conn->query($update_sql) === TRUE) {
            echo "Credits added successfully!";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Farmer not found!";
    }
}

$conn->close();
?>