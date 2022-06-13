<?php
include_once 'dbcon.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE pekerja set staffUsername='" . $_POST['username'] . "', staffName='" . $_POST['name'] . "', staffPhone='" . $_POST['phone'] . "' , staffMail='" . $_POST['email'] . "'WHERE staffID ='" . $_POST['id'] . "'");
$message = "Kemaskini pekerja berjaya!";
}
$result = mysqli_query($conn,"SELECT * FROM pekerja WHERE staffID='" . $_GET['staffID'] . "'");
$row= mysqli_fetch_array($result);
?>
