<?php
include_once 'dbcon.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE slottempahan set statusTempah='" . $_POST['status'] . "' WHERE slotID ='" . $_POST['id'] . "'");
$message = "Kemaskini temujanji berjaya!";
}
$result = mysqli_query($conn,"SELECT * FROM slottempahan WHERE slotID='" . $_GET['slotID'] . "'");
$row= mysqli_fetch_array($result);
?>
