<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["insert"]))
$fullname =$_POST["fullname"];
$email=$_POST["email"];
$message=$_POST["message"];
$insertsql = "INSERT INTO contactus (fullname,email,message)
VALUES(?,?,?)";

$stmt=$conn->prepare($insertsql);

$stmt->bind_param("sss",$fullname,$email,$message);
if($stmt->execute())
{
    echo "Message sent successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>