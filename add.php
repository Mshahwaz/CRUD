<?php include 'header.php'; ?>

<?php
 $servername="localhost";
 $username="root";
 $password="";
 $database="shahwaz";
 $conn=mysqli_connect($servername,$username,$password,$database);
 if (!$conn) {
     die("Connection Unsucessfull".mysqli_connect_error());
 }else{

    ?>
    <?php
    //echo "Connected";
 //Sql query to fetch classes
 $sql="SELECT * FROM course";
 $result=mysqli_query($conn,$sql);
 if(mysqli_num_rows($result)>0){

?>

<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="insertdata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="class">
                <option value="" selected disabled>Select Class</option>
                <?php
                while($row=mysqli_fetch_assoc($result)){
                echo '<option value='.$row['cid'].'>'.$row['cname'].'</option>';
                }}}
               ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
