<?php include 'header.php'; ?>
<?php
$conn = mysqli_connect("localhost", "root", "", "shahwaz");
if (!$conn) {
    die("UNsuccessfull");
}
$sid = $_GET['id'];
$sql = "SELECT * FROM students WHERE sid=$sid ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<div id="main-content">
    <h2>Update Record</h2>
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="hidden" name="sid" value="<?php echo $row['sid'];  ?>" />
            <input type="text" name="sname" value="<?php echo $row['sname'];  ?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['saddress'];  ?>" />
        </div>
        <div class="form-group">
            <label>Class</label>
            <select name="sclass">
                <?php
                $sql2 = "SELECT * FROM course";
                $result2 = mysqli_query($conn, $sql2);
                if (mysqli_num_rows($result2) > 0) {

                    while ($row2 = mysqli_fetch_assoc($result2)) {
                        if ($row['sclass'] == $row2['cid']) {
                            $selected = "selected";
                        } else {
                            $selected = "";
                        }
                        echo '<option '.$selected.' value="' . $row2['cid'] . '">' . $row2['cname'] . '</option>';
                    }
                }
                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['sphone'];  ?>" />
        </div>
        <input class="submit" type="submit" value="Update" />
    </form>
</div>
</div>
</body>

</html>