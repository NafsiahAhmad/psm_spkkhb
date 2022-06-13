<?php include 'dbcon.php';

if(isset($_POST['cancel']))
{
echo '<script>window.location.href= "pelanggan_profil.php";</script>';
} 

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];

        $query = "UPDATE pelanggan SET custUsername='$username', custPass='$password', custName='$name', custMail='$email', custPhone='$phone', custAddress='$address'
                    WHERE custUsername = '$username'";

        $query_run = mysqli_query($conn, $query);
    
         if($query_run)
         {
             echo '<script type="text/javascript"> alert("Kemaskini profil berjaya!") </script>';
             echo '<script>window.location.href= "pelanggan_profil.php";</script>';
         }
         else {
            echo '<script type="text/javascript"> alert("Kemaskini profil tidak berjaya!") </script>';
            echo '<script>window.location.href= "pelanggan_profil.php";</script>';
         }
    }
?>