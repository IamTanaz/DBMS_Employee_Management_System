<?php include "header.php"; ?>
<div class="main-content">
    <h2>Admin Form</h2>
    <form action="registration.php" class="post-form" method="post">
        <div class="form-group">
            <label for="">Username</label>
            
            <input type="text" name="username" name="sid" placeholder="Enter Username"/>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            
            <input type="password" name="password" name="sid" placeholder="Enter Password"/>
        </div>
        <div class="form-group">
            <label for="">Confirm Password</label>
            
            <input type="password" name="co_password" name="sid" placeholder="Enter Confirm Password"/>
        </div>
        <input type="submit" class="submit" value="Submit">

    </form>
</div>