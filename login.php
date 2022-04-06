<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h1>CRUD Login Form</h1>
    </div>
    <div class="main-content" style="margin-top: 120px;">
        <form action="validate.php" class="post-form" method="post">
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="username" placeholder="Enter username">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Enter password">
        </div>
        <input type="submit" class="submit" value="login">
        </form>
    </div>
</body>
</html>