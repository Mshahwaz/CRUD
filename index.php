<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php 
    $servername="localhost";
    $username="root";
    $password="";
    $database="shahwaz";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if (!$conn) {
        die("Connection Unsucessfull");
    }

    $sql="SELECT * FROM students JOIN course WHERE students.sclass=course.cid";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        die("Error");
    }
    if(mysqli_num_rows($result)>0){
?>
    <table cellpadding="7px">
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Address</th>
            <th>Class</th>
            <th>Phone</th>
            <th>Action</th>
        </thead>
        <tbody>


            <?php
            
            while ( $rows=mysqli_fetch_assoc($result)) {
            
            
            echo "<tr>
                <td>".$rows['sid']."</td>
                <td>".$rows['sname']."</td>
                <td>".$rows['saddress']."</td>
                <td>".$rows['cname']."</td>
                <td>".$rows['sphone']."</td>
                <td>
                    <a href='edit.php?id=".$rows['sid']."'>Edit</a>
                    <a href='delete-inline.php?id=".$rows['sid']."'>Delete</a>
                </td>
            </tr>";
            
            }}
            ?>



        </tbody>
    </table>
    

    <?php  
            if(mysqli_close($conn)){
                //echo "Connection closed...!";
            }
            ?>
</div>
</div>
</body>

</html>