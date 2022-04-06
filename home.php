<?php
 include "header.php";
?>
<div class="main-content">
    <h2>All Employee Record</h2>
    <?php
       include "config.php";
       $sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
       $result = mysqli_query($conn, $sql) or die("Query failed!");
       if(mysqli_num_rows($result)>0){
         ?>
         <div class="search-bar">
             <label for="">Search Bar</label>
             <input type="text" onkeyup="search()" id="text" placeholder="Search Student Record">
         </div>
         <table id="table">
            <thead>
                <th>ID</th>
                <th>Employee Name</th>
                <th>Address</th>
                <th>Rank</th>
                <th>Mobile</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <tr>
                        <td><?php echo $row["sid"]; ?></td>
                        <td><?php echo $row["sname"]; ?></td>
                        <td><?php echo $row["saddress"]; ?></td>
                        <td><?php echo $row["cname"]; ?></td>
                        <td><?php echo $row["sphone"]; ?></td>
                        <td>
                            <a href="edit.php?id=<?php echo $row['sid'];?>">Edit</a>
                            <a href="delete-inline.php?id=<?php echo $row['sid'];?>">Delete</a>
                        </td>

                    </tr>
                    <?php
                }
                ?>
            </tbody>

         </table>
         <?php  
       }else{
           echo "<h2>NO Record Found!</h2>";
       }
       mysqli_close($conn);
    ?>
</div>