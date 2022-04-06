<?php
$name = $_POST["sname"];
$address = $_POST["saddress"];
$class= $_POST["class"];
$phone = $_POST["sphone"];
include "config.php";
$sql = "INSERT INTO student(sname, saddress, sclass, sphone) VALUES ('{$name}','{$address}','{$class}','{$phone}')";
$result = mysqli_query($conn, $sql) or die("Query Failed!");
mysqli_close($conn);
header("location: home.php");
?>