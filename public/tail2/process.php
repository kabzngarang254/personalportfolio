<?php
include("connection.php");


function inserttest($conn,$fullname,$email,$phonenumber,$age,$education,$appointmentdate,$reason,$message)
{
    $insertsql='insert into test (fullname,email,phonenumber,age,education,appointmentdate,reason,message)values(?,?,?,?,?,?,?,?)';

    $stmt=$conn->prepare($insertsql);
    $stmt->bind_param("ssssssss",$fullname,$email,$phonenumber,$age,$education,$appointmentdate,$reason,$message);
    if($stmt->execute())
    {
        return "REGISTERED SUCCESSFULLY!!!";
    }
    else{
        return "Registration error please try again!!!!" .$stmt->error;
    }
    $stmt->close();
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST["insert"]))
    {
        $fullname=$_POST["fullname"];
        $email=$_POST["email"];
        $phonenumber=$_POST["phonenumber"];
        $age=$_POST["age"];
        $education=$_POST["education"];
        $appointmentdate=$_POST['appointmentdate'];
        $reason=$_POST["reason"];
        $message=$_POST['message'];

        echo inserttest($conn,$fullname,$email,$phonenumber,$age,$education,$appointmentdate,$reason,$message);
    }
}
$conn->close();
?>