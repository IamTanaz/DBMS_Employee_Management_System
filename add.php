<?php
include "header.php";
?>
<div class="main-content">
    <h2>Add New Employee Record</h2>
    <form action="save.php" class="post-form" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="sname" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="">Address</label>
            <input type="text" name="saddress">
        </div>
        <div class="form-group">
            <label for="">Class</label>
            <select name="class" id="">
                <option value=""selected disabled>Select Class</option>
                <?php
                include "config.php";
                $sql = "Select * from studentclass";
                $result = mysqli_query($conn, $sql) or die("Query failed!");
                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row["cid"]; ?>"><?php echo $row["cname"]; ?></option>
               
                <?php
                }
    
                ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Phone</label>
            <input type="text" name="sphone">
        </div>
        <input type="Submit" class="submit" value="Save"
        >
    </form>
</div>