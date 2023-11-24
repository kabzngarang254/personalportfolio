<?php
include("process.php");
$id=1;
$sql="delete from users where id=1";
if(mysqli_query($conn,$sql))
{
    echo "delete successfull";
}
else{
    echo "delete error".mysql_error($conn);
}
?>