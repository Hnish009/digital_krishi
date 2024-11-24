<?php
// C:\xampp\htdocs\digital_krishi\farmer.php
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password
$dbname = "digital_krishi";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $village = $_POST['village'];
    $area = $_POST['area'];
    $soil_type = $_POST['soil_type'];
    $budget = $_POST['budget'];
    $manpower = $_POST['manpower'];
    $phone_number = $_POST['phone_number'];

    $sql = "INSERT INTO farmers (name, state, district, village, area, soil_type, budget, manpower, phone_number) VALUES ('$name', '$state', '$district', '$village', '$area', '$soil_type', '$budget', '$manpower', '$phone_number')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

