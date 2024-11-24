<?php
// C:\xampp\htdocs\krishi\store.php
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password
$dbname = "digital_krishi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_name = $_POST['item_name'];
    $price = $_POST['price'];
    $phone_number = $_POST['phone_number'];

    // Check if farmer has enough budget
    $sql = "SELECT budget FROM farmers WHERE phone_number='$phone_number'";
    $result = $conn->query($sql);
    $farmer = $result->fetch_assoc();

    if ($farmer && $farmer['budget'] >= $price) {
        // Deduct budget
        $new_budget = $farmer['budget'] - $price;
        $update_sql = "UPDATE farmers SET budget='$new_budget' WHERE phone_number='$phone_number'";
        $conn->query($update_sql);

        // Add transaction
        $transaction_sql = "INSERT INTO transactions (phone_number, amount) VALUES ('$phone_number', '$price')";
        $conn->query($transaction_sql);

        echo "Purchase successful!";
    } else {
        echo "Insufficient budget!";
    }
}

$conn->close();
?>

