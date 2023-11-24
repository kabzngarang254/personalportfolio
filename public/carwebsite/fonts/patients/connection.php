<?php
$hostname='localhost';
$username='root';
$password='';
$database='patient_management_db';

$conn =new mysqli($hostname,$username,
$password,$database);

if($conn->connect_error){
    die("connection error");
}
else{
    echo "connected successfully";
}
?>