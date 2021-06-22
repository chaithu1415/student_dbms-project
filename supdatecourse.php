<?php

$conn=new mysqli("localhost","root","","student");
if($conn->connect_error){
    die("database connection failed".$conn->connect_error);
}

if(empty($_POST['rollno']) || empty($_POST['course']) ){

    $error="Fields should not be empty";
    header("Location: serror.html");
}
else
{
     $fname=$_POST['rollno'];
     $phone=$_POST['course'];
    $sql = "update course set course_id='$phone' where roll_no='$fname' ";
    $result = mysqli_query($conn, $sql);
    $num_rows = mysqli_num_rows($result);
      if ($conn->query($query) === TRUE) {
    

        header('location: '."serror.html");
    }
    else
    {
        header("location: supdate.html");
    }

}