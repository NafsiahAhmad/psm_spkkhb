<?php
session_start();
include ("dbcon.php");


$msg = "";

if(isset($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password'];
$userType = $_POST['userType'];


$username = stripcslashes($username);  
$password = stripcslashes($password);  
$username = mysqli_real_escape_string($conn,$username);  
$password = mysqli_real_escape_string($conn, $password);

if (isset($_POST['userType'])){

if($userType==1){
$sql = "SELECT * FROM pentadbir WHERE adminUsername = '$username' AND adminPass = '$password'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);

if($count == 1)
{  
    session_regenerate_id();

    $_SESSION['username'] = $row['adminUsername'];
    $_SESSION['password'] = $row['adminPass']; 
    $_SESSION['role'] = "pentadbir";
   session_write_close();
    header('Location: dashpentadbir.php');
}  
else
{  
    echo "<script>alert('Log masuk gagal! ID pengguna dan kata laluan tidak sah.');</script>";
	echo "<script>window.location.href='login.php';</script>";

}  
}


else if ($userType==2){
$sql = "SELECT * FROM pekerja WHERE staffUsername = '$username' AND staffPass = '$password'";  
$result = mysqli_query($conn, $sql);  
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result);

if($count == 1)
{  
    session_regenerate_id();

    $_SESSION['username'] = $row['staffUsername'];
    $_SESSION['password'] = $row['staffPass'];
    $_SESSION['role'] = "pekerja";
     session_write_close();
    header('Location: dashpekerja.php');
}  
else
{  
    echo "<script>alert('Log masuk gagal! ID pengguna dan kata laluan tidak sah.');</script>";
	echo "<script>window.location.href='login.php';</script>";
} 
    }

else if ($userType==3){
      $sql = "SELECT * FROM pelanggan WHERE custUsername = '$username' AND custPass = '$password'";  
      $result = mysqli_query($conn, $sql);  
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      $count = mysqli_num_rows($result);
      
      if($count == 1)
      {  
          session_regenerate_id();
      
          $_SESSION['custID'] = $row['custID'];
          $_SESSION['username'] = $row['custUsername'];
          $_SESSION['password'] = $row['custPass'];
          $_SESSION['role'] = "pelanggan";
          session_write_close();
          header('Location: dashpelanggan.php');
          
      }  
      else
      {  
        echo "<script>alert('Log masuk gagal! ID pengguna dan kata laluan tidak sah.');</script>";
        echo "<script>window.location.href='login.php';</script>";
      } 
          }
  
       else{
        $msg = "Sila masukkan ID pengguna dan kata laluan!";
    }
}
}

?>

