<?php
session_start();
include ("dbcon.php");


if(isset($_POST['register'])){
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$sql = "SELECT * FROM pekerja WHERE staffUsername = '$username'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);

 if($count > 0)
{   
 echo "<script>alert('ID pengguna telah digunakan!');</script>";
 echo "<script>window.location.href='admin_tambahpekerja.php';</script>";
}  

else
{  
 $query = "INSERT INTO pekerja (staffUsername, staffPass, staffName, staffPhone, staffMail) 
            VALUES ('$username', '$password', '$name', '$phone', '$email')";
           $results = mysqli_query($conn, $query);
          
           echo "<script>alert('Daftar pekerja berjaya!');</script>";
           echo "<script>window.location.href='admin_senaraipekerja.php';</script>";

    }
} 

?>