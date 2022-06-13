<?php
session_start();
include ("dbcon.php");


if(isset($_POST['submit'])){
    $ubatName = $_POST['ubatName'];
    $ubatQty = $_POST['ubatQty']; 



$sql = "SELECT * FROM stokubat WHERE ubatName = '$ubatName'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

 if($count > 0)
{   
 echo "<script>alert('Stok ubat telah wujud!');</script>";
 echo "<script>window.location.href='admin_stokubat.php';</script>";
}    

 else
 {
 $query =  "INSERT INTO stokubat (ubatName, ubatQty)
            VALUES ('$ubatName','$ubatQty')";
           $results = mysqli_query($conn, $query);
          
           echo "<script>alert('Tambah stok ubat berjaya!');</script>";
           echo "<script>window.location.href='admin_stokubat.php';</script>";
 }
}
?>