<?php
$sid = $_GET['id'];
$connn= mysqli_connect("localhost", "root", "", "shahwaz");
if (!$connn) {
    die("UNsuccessfull");
}else{
    //echo "successfull";
$sql = "DELETE FROM students WHERE sid='$sid'";
$result=mysqli_query($connn,$sql);

header("Location:/CRUD/index.php");
mysqli_close($conn);

}
