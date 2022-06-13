<?php
include_once 'dbcon.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE slottempahan set rawatanType ='" . $_POST['rawatan'] . "',
rawatanButiran='" . $_POST['butiran']  . "'WHERE slotID='" . $_POST['id'] . "'");
$message = "Kemaskini rawatan dan perkhidmatan berjaya!";
}
$result = mysqli_query($conn,"SELECT * FROM slottempahan WHERE slotID='" . $_GET['slotID'] . "'");
$row= mysqli_fetch_array($result);
?>

