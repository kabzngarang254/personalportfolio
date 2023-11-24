<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'project_db';

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
    $sql = "INSERT INTO users (email,password) VALUES (?,?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("sssis", $email,$password);

        if ($stmt->execute()) {
            echo "Item added successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error in preparing statement: " . $conn->error;
    }
}

$conn->close();

?>