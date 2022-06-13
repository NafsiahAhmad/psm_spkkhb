<?php
include_once 'dbcon.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE informasi set infoTajuk ='" . $_POST['tajuk'] . "', infoKeterangan='" . $_POST['keterangan']  . "'WHERE infoTajuk='" . $_POST['tajuk'] . "'");
$message = "Kemaskini informasi berjaya!";
}
$result = mysqli_query($conn,"SELECT * FROM informasi WHERE infoID='" . $_GET['infoID'] . "'");
$row= mysqli_fetch_array($result);
?>
