<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = ""; // Default for XAMPP
$database = "gymcustomers";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form values
$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$gender = $_POST['gender'];

// Prepare and insert data
$sql = "INSERT INTO customers (fullName, email, phone, age, gender) 
        VALUES ('$fullName', '$email', '$phone', $age, '$gender')";

if ($conn->query($sql) === TRUE) {
    // echo "Registration successful!";
    header("Location: project1.html?success=1");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>