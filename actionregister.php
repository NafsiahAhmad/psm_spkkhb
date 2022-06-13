<?php
session_start();
include ("dbcon.php");


$msg = "";

if(isset($_POST['register'])){
$username = $_POST['username'];
$password = $_POST['password'];
$rpassword = $_POST['repassword'];
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];


if ($rpassword != $password ){
    echo "<script>alert('Kata laluan tidak sama!');</script>";
    echo "<script>window.location.href='register.php';</script>";
}

else if ($rpassword == $password ){
$sql = "SELECT * FROM pelanggan WHERE custUsername = '$username'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);

 if($count > 0)
{   
 echo "<script>alert('ID pengguna telah digunakan!');</script>";
 echo "<script>window.location.href='register.php';</script>";
}  

else
{  
 $query = "INSERT INTO pelanggan (custUsername, custPass, custName, custPhone, custMail, custAddress) 
            VALUES ('$username', '$password', '$name', '$phone', '$email', '$address')";
           $results = mysqli_query($conn, $query);
          
           echo "<script>alert('Daftar berjaya! Sila lakukan log masuk.');</script>";
           echo "<script>window.location.href='login.php';</script>";

    }
}
}  

?>