<?php
include_once 'dbcon.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE kucing set catName='" . $_POST['catName'] . "' ,catBreed='" . $_POST['catBreed'] . "' , 
catBday='" . $_POST['catBday'] . "' , catGender='" . $_POST['catGender'] . "' , catBerat='" . $_POST['catBerat'] . "',
catColor='" . $_POST['catColor'] . "' WHERE catID='" . $_POST['id'] . "'");
$message = "Kemaskini kucing berjaya!";
}
$result = mysqli_query($conn,"SELECT * FROM kucing WHERE catID='" . $_GET['catID'] . "'");
$row= mysqli_fetch_array($result);
?>
