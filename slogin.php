<?php

$conn=new mysqli("localhost","root","","student");
if($conn->connect_error){
	die("database connection failed".$conn->connect_error);
}

if(empty($_POST['id']) || empty($_POST['password']) ){

    $error="Fields should not be empty";
    header("Location: serror.html");
}
else
{
     $fname=$_POST['id'];
     $phone=$_POST['password'];
	$sql = "SELECT * FROM administrator WHERE admin_id='$fname' and password='$phone' ";
    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);
    if($num_rows === 0)
    {
        header("location: serror.html");
    }
    else
    {
        header("location: sfirst.html");
    }

}