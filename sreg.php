<?php

$conn=mysqli_connect("localhost","root","","student");
if(!$conn){
	die("database connection failed".mysqli_error($conn));
}

echo "hello";
if(!empty($_POST['rollno']) && !empty($_POST['sname']) && !empty($_POST['address']) && !empty($_POST['adminid']) && !empty($_POST['phone'])){
     $rollno=$_POST['rollno'];
     $sname=$_POST['sname'];
     $address=$_POST['address'];
     $phone=$_POST['phone'];
     $adminid=$_POST['adminid'];

     $query="insert into `students` (roll_no,sname,address,phone_no,admin_id) values('$rollno','$sname','$address','$phone','$adminid')";
     
     $result=mysqli_query($conn,$query) or die(mysqli_error($conn));
         if ($conn->query($query) === TRUE) {
    

        header('location: '."serror.html");
    }
    else
    {
        header('location: '."shi.html");
    }
}
else{
    echo "Fields should not be empty OR roll number already registered";
    header('location: '."serror.html");
}

?>