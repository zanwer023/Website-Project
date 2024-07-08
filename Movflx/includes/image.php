<?php

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

// Create database
$dbname = "phpgallery";
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully<br>";
} else {
    echo "Error creating database: ". $conn->error;
}

// Select database
$conn->select_db($dbname);

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS `images` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `title` text NOT NULL,
    `description` text NOT NULL,
    `filepath` text NOT NULL,
    `uploaded_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8";

if ($conn->query($sql) === TRUE) {
    echo "Table images created successfully<br>";
} else {
    echo "Error creating table: ". $conn->error;
}

// SQL to insert sample data
$stmt = $conn->prepare("INSERT INTO `images` (`id`, `title`, `description`, `filepath`, `uploaded_date`) VALUES (?,?,?,?,?)");
$stmt->bind_param("issss", $id, $title, $description, $filepath, $uploaded_date);

$data = array(
    array(1, 'Women Day', '', 'img/poster/ucm_poster01.jpg', '2024-07-7 20:09:26'),
    array(2, 'The Perfect Match', '', 'img/poster/ucm_poster02.jpg', '2024-07-7 20:10:05'),
    array(3, 'The Dog Woof', '', 'img/poster/ucm_poster03.jpg', '2024-07-7 20:10:45'),
    array(4, 'The Easy Reach', '', 'img/poster/ucm_poster04.jpg', '2024-07-7 20:11:27'),
    array(5, 'The Cooking', '', 'img/poster/ucm_poster05.jpg', '2014-07-7 20:12:00'),
    array(6, 'The Hikaru Night', '.', 'img/poster/ucm_poster06.jpg', '2024-07-17 20:12:39'),
);

foreach ($data as $row) {
    list($id, $title, $description, $filepath, $uploaded_date) = $row;
}

if ($stmt->error) {
    echo "Error inserting data: ". $stmt->error;
} else {
    echo "Sample data inserted successfully";
}

$stmt->close();
$conn->close();
?>