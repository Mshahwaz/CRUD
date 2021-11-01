<?php
//sql query to insert data
$sname = $_POST['sname'];
$saddress = $_POST['saddress'];
$sclass = $_POST['class'];
$sphone = $_POST['sphone'];
$conn = mysqli_connect("localhost", "root", "", "shahwaz");
if (!$conn) {
    die("UNsuccessfull");
}
$sql = "INSERT INTO `students` (`sid`, `sname`, `saddress`, `sclass`, `sphone`, `dt`) VALUES (NULL, '$sname', '$saddress', '$sclass', '$sphone', current_timestamp());
";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die("Query not insert");
}else{
    //echo "running...!";
}
header("Location:/CRUD/index.php");
mysqli_close($conn);


?>