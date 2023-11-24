<?php
$hostname='localhost';
$username='root';
$password='';
$database='tailwind_db';


$conn =new mysqli($hostname,$username,$password,$database);

if($conn->connect_error){
    die("connection_error");
}

else{
    echo "CONNECTED SUCCESSFULLY!!";
}
?>