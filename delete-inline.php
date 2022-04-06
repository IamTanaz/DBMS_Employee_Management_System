<?php
$id = $_GET["id"];
include "config.php";
$sql = "DELETE FROM student WHERE sid = '{$id}'";
$result = mysqli_query($conn, $sql ) or die("Query Failed!");
mysqli_close($conn);
header("location: home.php");
?>