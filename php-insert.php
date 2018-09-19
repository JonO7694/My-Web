<?php
$servername = "localhost";
$username = "root";
$password = "Meads1996";
$dbname = "rocket";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO UserLogin (FirstName, LastName, Password )
VALUES ('John', 'Doe', '@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
