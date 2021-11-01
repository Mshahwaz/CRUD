<?php
$sid=$_POST['sid'];
$sname = $_POST['sname'];
$saddress = $_POST['saddress'];
$sclass = $_POST['sclass'];
$sphone = $_POST['sphone'];
$conn = mysqli_connect("localhost", "root", "", "shahwaz");
if (!$conn) {
    die("UNsuccessfull");
}
$sql = "UPDATE students SET sname = '$sname', saddress= '$saddress',sclass='$sclass',sphone='$sphone' WHERE sid = '$sid'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Query not insert");
} else {
    //echo "running...!";
}
header("Location:/CRUD/index.php");
mysqli_close($conn);
