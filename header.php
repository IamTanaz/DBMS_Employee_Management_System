<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location: login.php");
}else{
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <h1>Employee Management System</h1>
        </div>
        <div class="menu">
            <ul>
                <li>
                    <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="add.php">Add Record</a>
                </li>
                <li>
                    <a href="update.php">Update Record</a>
                </li>
                <li>
                    <a href="delete.php">Delete Record</a>
                </li>
                <li>
                    <a href="admin.php">Make Admin</a>
                </li>
                <li>
                    <a href="logout.php">Logout <span style="color: blue;"><?php echo $_SESSION['username'];?></span></a>
                </li>
            </ul>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
    <?php

}
?>
