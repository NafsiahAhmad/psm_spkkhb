<?php
session_start();
include ("dbcon.php");


if(isset($_POST['submit'])){
    $ubatID = $_POST["ubat"];
    $pelanggan = $_POST['pelanggan'];
    $kucing = $_POST['kucing']; 
    $ubatUsedQty = $_POST['ubatUsedQty']; 


    $sql = "SELECT * FROM rekodgunaubat WHERE ubatID = '$ubatID'";  
    $result = mysqli_query($conn, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  

 
    $query =  "INSERT INTO rekodgunaubat (namaPelangganUbat, namaKucingUbat, ubatID, ubatUsedQty)
            VALUES ('$pelanggan','$kucing','$ubatID','$ubatUsedQty');";

    $query .= "UPDATE stokubat SET ubatQty = ubatQty - $ubatUsedQty WHERE ubatID = '$ubatID'";
  
    $results = mysqli_multi_query($conn, $query);
          
    echo "<script>alert('Tambah rekod pengunaan ubat berjaya!');</script>";
    echo "<script>window.location.href='admin_rekodgunaubat.php';</script>";

}
?>