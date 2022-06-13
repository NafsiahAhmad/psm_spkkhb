
<?php
session_start();
include ("dbcon.php");


if(isset($_POST['submit'])){


    $custUsername = stripslashes($_REQUEST['custUsername']);
	$custUsername = mysqli_real_escape_string($conn,$custUsername); 
    $custName = stripslashes($_REQUEST['custName']);
	$custName= mysqli_real_escape_string($conn,$custName); 
    $custPhone = stripslashes($_REQUEST['custPhone']);
	$custPhone= mysqli_real_escape_string($conn,$custPhone);
    $kucing = stripslashes($_REQUEST['kucing']);
	$kucing= mysqli_real_escape_string($conn,$kucing);
    $tarikh = stripslashes($_REQUEST['tarikh']);
	$tarikh= mysqli_real_escape_string($conn,$tarikh);
    $masa = stripslashes($_REQUEST['masa']);
	$masa= mysqli_real_escape_string($conn,$masa);

$sql = "SELECT * FROM slottempahan WHERE tarikhTempah = '$tarikh'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  

 
 $query =  "INSERT INTO slottempahan (custName, namaKucingTempah, tarikhTempah, masaTempah, custUsername, custPhone)
            VALUES ('$custName','$kucing','$tarikh','$masa', '$custUsername', '$custPhone')";
           $results = mysqli_query($conn, $query);
          
           echo "<script>alert('Tambah slot tempahan berjaya!');</script>";
           echo "<script>window.location.href='pelanggan_tempah.php';</script>";

}
?>