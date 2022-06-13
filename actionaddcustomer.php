<?php
session_start();
include ("dbcon.php");


$msg = "";

if(isset($_POST['register'])){
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];


$sql = "SELECT * FROM pelanggan WHERE custUsername = '$username'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);

 if($count > 0)
{   
 echo "<script>alert('ID pengguna telah digunakan!');</script>";
 echo "<script>window.location.href='pekerja_tambahpelanggan.php';</script>";
}  

else
{  
 $query = "INSERT INTO pelanggan (custUsername, custPass, custName, custPhone, custMail, custAddress) 
            VALUES ('$username', '$password', '$name', '$phone', '$email', '$address')";
           $results = mysqli_query($conn, $query);
          
           echo "<script>alert('Daftar pelanggan berjaya!');</script>";
           echo "<script>window.location.href='pekerja_senaraipelanggan.php';</script>";

    }
}


?>

