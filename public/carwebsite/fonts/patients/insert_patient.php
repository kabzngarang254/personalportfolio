<?php
include("connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["insert"]))
{
    $name=$_POST["name"];
    $dob=$_POST["dob"];
    $gender=$_POST["gender"];
    $address=$_POST["address"];


$insertsql="insert into patients(name,dob,gender,address) values(?,?,?,?)";

//prepare
$stmt=$conn->prepare($insertsql);

//bind
$stmt->bind_param("ssss",$name,$dob,$gender,$address);
if($stmt->execute())
{
    echo "insert successfull";
}
else{
    echo "unable to connect" .stmt->error;
}
$stmt->close();
}
?>