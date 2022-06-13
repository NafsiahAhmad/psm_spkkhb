<?php include 'dbcon.php';

if(isset($_POST['cancel']))
{
echo '<script>window.location.href= "admin_profil.php";</script>';
} 

    if(isset($_POST['submit']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];

        $query = "UPDATE pentadbir SET adminUsername='$username', adminPass='$password', adminName='$name', adminMail='$email', adminPhone='$phone'
                    WHERE adminUsername = '$username'";

        $query_run = mysqli_query($conn, $query);
    
         if($query_run)
         {
             echo '<script type="text/javascript"> alert("Kemaskini profil berjaya!") </script>';
             echo '<script>window.location.href= "admin_profil.php";</script>';
         }
         else {
            echo '<script type="text/javascript"> alert("Kemaskini profil tidak berjaya!") </script>';
            echo '<script>window.location.href= "admin_profil.php";</script>';
         }
    }
?>