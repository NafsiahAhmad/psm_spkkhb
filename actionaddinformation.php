
<?php
session_start();
include ("dbcon.php");

    if (isset($_POST['upload'])){

        $target = "images/".basename($_FILES['photo']['name']);

        $tajuk = mysqli_real_escape_string($conn, $_POST['tajuk']);
        $keterangan = mysqli_real_escape_string($conn, $_POST['keterangan']);
        $photo = $_FILES['photo']['name'];
        
        $query = "INSERT INTO informasi (infoTajuk, infoKeterangan, infoPhoto)
        VALUES('$tajuk','$keterangan', '$photo')" ;

        mysqli_query($conn, $query);

        if(move_uploaded_file($_FILES['photo']['tmp_name'], $target)){
            echo '<script>alert("Tambah informasi berjaya!  ")</script>';
        echo '<script>window.location.href= "pekerja_tambahinfo.php";</script>';
        
        } else{
           
        }
    }
    $result = mysqli_query($conn, "SELECT * FROM informasi");
    
        
 
?>