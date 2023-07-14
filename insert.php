<?php

require_once('../connection.php');
$name = $_POST["name"];
$username = $_POST["username"];
$email = $_POST["email"];
$mobilenumber = $_POST["mobilenumber"];
$gender = $_POST["gender"];
$password = $_POST["password"];

// Sanitize the data
$name = mysqli_real_escape_string($conn, $name);
$username = mysqli_real_escape_string($conn, $username);
$email = mysqli_real_escape_string($conn, $email);
$mobilenumber = mysqli_real_escape_string($conn, $mobilenumber);
$gender = mysqli_real_escape_string($conn, $gender);

// Encrypt the password using password_hash
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Construct the SQL query
$sql = "INSERT INTO `details` (`name`, `username`, `email`, `mobilenumber`, `gender`, `password`)
        VALUES ('$name', '$username', '$email', '$mobilenumber', '$gender', '$hashedPassword')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
