<?php
$username = $_POST["username"];
$password = $_POST["password"];
$co_password = $_POST["co_password"];
if($password == $co_password){
    include "config.php";
    $sql = "SELECT * FROM admin_info WHERE username = '{$username}' && password = '{$co_password}'";
    $result = mysqli_query($conn, $sql) or die("Query Failed!");
    $num = mysqli_num_rows($result);
    if($num == 1){
        echo "You have already exit as a admin";
    }else{
        $sql1 = "INSERT INTO admin_info(username, password) VALUES ('{$username}','{$password}' )";
        $sql = mysqli_query($conn, $sql1) or die("query failed!");
        mysqli_close($conn);
        header("location: home.php");

    }

}else{
    echo "<h1>Your password and confirm password in not same</h1>";
}
?>