<?php
$id = $_POST["sid"];
$name = $_POST["sname"];
$address = $_POST["saddress"];
$class = $_POST["class"];
$phone = $_POST["sphone"];
include "config.php";
$sql = "UPDATE student SET sname = '{$name}',saddress = '{$address}',sclass = '{$class}',sphone = '{$phone}' WHERE sid = '{$id}' ";
$result = mysqli_query($conn, $sql) or die("Query failed!");

mysqli_close($conn);
header("location: home.php");


?>