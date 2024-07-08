<?php
// Database connection details

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phpcomments";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS `comments` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `page_id` int(11) NOT NULL,
    `parent_id` int(11) NOT NULL DEFAULT '-1',
    `name` varchar(255) NOT NULL,
    `content` text NOT NULL,
    `submit_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8";

if ($conn->query($sql) === TRUE) {
    echo "Table comments created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// SQL to insert sample data
$sql = "INSERT INTO `comments` (`id`, `page_id`, `parent_id`, `name`, `content`, `submit_date`) VALUES
(1, 1, -1, 'John Doe', 'Thank you for taking the time to write this article, I really enjoyed reading it!\r\n\r\nThank you, David!', '2020-07-22 14:35:15'),
(2, 1, 11, 'David Adams', 'It''s good to hear that you enjoyed this article.', '2020-07-22 14:36:19'),
(3, 1, -1, 'Michael', 'I appreciate the time and effort you spent writing this article, good job!', '2020-07-22 14:37:43');";

// if ($conn->query($sql) === TRUE) {
//     echo "Sample data inserted successfully";
// } else {
//     echo "Error inserting data: " . $conn->error;
// }

$conn->close();
?>
