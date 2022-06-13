<?php
session_start();
include ("dbcon.php");


if(isset($_POST['register'])){
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];


$sql = "SELECT * FROM pentadbir WHERE adminUsername = '$username'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);

 if($count > 0)
{   
 echo "<script>alert('ID pengguna telah digunakan!');</script>";
 echo "<script>window.location.href='admin_tambahpentadbir.php';</script>";
}  

else
{  
 $query = "INSERT INTO pentadbir (adminUsername, adminPass, adminName, adminPhone, adminMail) 
            VALUES ('$username', '$password', '$name', '$phone', '$email')";
           $results = mysqli_query($conn, $query);
          
           echo "<script>alert('Daftar pentadbir berjaya!');</script>";
           echo "<script>window.location.href='admin_senaraipentadbir.php';</script>";

    }
} 

?>