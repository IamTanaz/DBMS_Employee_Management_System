<?php
session_start();
$username = $_POST["username"];
$pass = $_POST["password"];

include "config.php";
$sql = "SELECT * FROM admin_info WHERE username = '{$username}' && password = '{$pass}'";
$result = mysqli_query($conn, $sql) or die("Query failed");
$num = mysqli_num_rows($result);
if($num == 1){
    $_SESSION["username"] = $username;
    header("location: home.php");
}else{
    echo "Your Password is incorrect";
}
?>
