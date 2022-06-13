<?php
include_once 'dbcon.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE pelanggan set custUsername='" . $_POST['username'] . "', custName='" . $_POST['name'] . "', custPhone='" . $_POST['phone'] . "' , custMail='" . $_POST['email'] . "' , custAddress='" . $_POST['address'] . "' WHERE custID ='" . $_POST['id'] . "'");
$message = "Kemaskini pelanggan berjaya!";
}
$result = mysqli_query($conn,"SELECT * FROM pelanggan WHERE custID='" . $_GET['custID'] . "'");
$row= mysqli_fetch_array($result);
?>
