<?php
include "header.php";
if(isset($_POST["showbtn"])){
    $id = $_POST["id"];
    include "config.php";
    $sql = "DELETE from student WHERE sid = {$id}";
    $result = mysqli_query($conn, $sql) or die("query failed!");
    mysqli_close($conn);
    header("location: home.php");
}
?>

<div class="main-content">
    <h2>Delete employee record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group">
            <label for="">ID</label>
            <input type="text" name="id">
        </div>
        <input type="submit" class="submit" value="show" name="showbtn">
    </form>
</div>