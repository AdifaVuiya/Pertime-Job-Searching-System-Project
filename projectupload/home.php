
<?php

include_once("connection.php");
include_once("function.php");
check_login_user();
$result = mysqli_query($mysqli,"SELECT * FROM registration ORDER BY id DESC");

?>

