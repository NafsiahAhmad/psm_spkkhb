<?php
include_once 'dbcon.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE pentadbir set adminUsername='" . $_POST['username'] . "', adminName='" . $_POST['name'] . "', adminPhone='" . $_POST['phone'] . "' , adminMail='" . $_POST['email'] . "'WHERE adminID ='" . $_POST['id'] . "'");
$message = "Kemaskini pentadbir berjaya!";
}
$result = mysqli_query($conn,"SELECT * FROM pentadbir WHERE adminID='" . $_GET['adminID'] . "'");
$row= mysqli_fetch_array($result);
?>
