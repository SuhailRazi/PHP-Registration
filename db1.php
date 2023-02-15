<?php
$servername = "localhost";
$username = "suhail";
$password = "";
$dbname = "form1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create user table
$user_table = "CREATE TABLE user (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(30) NOT NULL,
  email VARCHAR(50) NOT NULL,
  mobile VARCHAR(15) NOT NULL,
  password VARCHAR(50) NOT NULL,
  address VARCHAR(50) NOT NULL
)";

if (mysqli_query($conn, $user_table)) {
    echo "User table created successfully";
} else {
    echo "Error creating user table: " . mysqli_error($conn);
}



mysqli_close($conn);
?>