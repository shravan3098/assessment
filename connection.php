<?php
error_reporting(0);
$servername="localhost";
$username="root";
$password="";
$dbname="landingpage";
$con = mysqli_connect($servername, $username, $password, $dbname);

if(!$con){

echo"not connected";
}
else{
    
    echo"connected";
}

//start
$fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $jobtitle = $_POST['jobtitle'];
    $company = $_POST['company'];
    $question = $_POST['question'];

    $sql= "INSERT INTO `landingform`(`fname`, `lname`, `email`, `phone`, `jobtitle`, `company`, `question`)
     VALUES ('$fname','$lname','$email','$phone','$jobtitle','$company','$question')";

     $result = mysqli_query($con,$sql);

     if($result)
     {
        echo"data submited";
    }

    else{
        echo"query failed.....";
    }

?>