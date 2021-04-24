<?php

session_start();
include("connection.php");


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$country = $_POST['country'];
$Division = $_POST['Division'];
$Zipcode = $_POST['Zipcode'];
$Password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

$sql = "insert into registration values('','$firstname','$lastname','$email','$country','$Division','$Zipcode','$Password','$confirmpassword')";
$data = mysqli_query($conn,$sql);

if($data){
    header("location:login-page.html");
}

else{

    echo "error " .$sql . "<br>" .mysqli_error($conn);
}

mysqli_close($conn);

?>