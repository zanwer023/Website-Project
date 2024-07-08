<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phplogin";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS `accounts` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(50) NOT NULL,
    `password` varchar(255) NOT NULL,
    `email` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8";

if ($conn->query($sql) === TRUE) {
    echo "Table accounts created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Optional: Insert a sample account
$stmt = $conn->prepare("INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES (?, ?, ?, ?)");
$stmt->bind_param("isss", $id, $username, $password, $email);
$id = 1;
$username = 'test';
$password = '$2y$10$SfhYIDtn';
$email = 'test@test.com';

// if ($conn->query($insert_sample_account) === TRUE) {
//     echo "Sample account inserted successfully";
// } else {
//     echo "Error inserting sample account: " . $conn->error;
// }

$conn->close();
?>