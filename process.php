<?php
$servername = "localhost";
$username = "root"; // Default MySQL username
$password = ""; // Default is empty
$database = "student_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$ID = $_POST['ID'];
$name = $_POST['name'];
$email = $_POST['email'];
$batch = $_POST['batch'];
$course = $_POST['course'];

// Insert into database
$sql = "INSERT INTO students (ID, name, email, batch, course) VALUES ('$ID', '$name', '$email', '$batch', '$course')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Student information saved successfully!'); window.location.href='index.php';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
