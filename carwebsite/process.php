<?php
$hostname = 'localhost';
$username = 'root';
$password ='';
$database ='project_db';

$conn = new mysqli($hostname,$username,$password,$database);
if($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST")
$email =$_POST["email"];
$password=password_hash($_POST["password"],PASSWORD_DEFAULT);
$sql = "INSERT INTO users (email,password)
VALUES('$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registration successful";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>