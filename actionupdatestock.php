<?php
include_once 'dbcon.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE stokubat set ubatName='" . $_POST['name'] . "',  ubatQty='" . $_POST['qty'] . "'WHERE ubatID ='" . $_POST['id'] . "'");
$message = "Kemaskini temujanji berjaya!";
}
$result = mysqli_query($conn,"SELECT * FROM stokubat WHERE ubatID='" . $_GET['ubatID'] . "'");
$row= mysqli_fetch_array($result);
?>
