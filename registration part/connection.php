<?php

$servername = "localhost";
$username = "root";
$password = '';
$database = "project";

$conn = mysqli_connect($servername,$username,$password,$database);
if($conn){
   header("location:home.html");
  

}
else("Connection failed:" .mysqli_connect_error())

?>