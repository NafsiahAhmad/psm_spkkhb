<?php
include_once 'dbcon.php';
$sql = "DELETE FROM pekerja WHERE staffID='" . $_GET["staffID"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Padam pekerja berjaya!');</script>";
    echo "<script>window.location.href='admin_senaraipekerja.php';</script>";

} else {
    echo "<script>alert('Ralat! Padam pekerja tidak berjaya.')</script>" . mysqli_error($conn);
}
mysqli_close($conn);
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "spkkhb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM pekerja WHERE staffID ='" . $_GET["staffID"] . "'";

    $conn->exec($sql);
    echo "<script>alert('Rekod pekerja berjaya dipadam!')</script>";
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$conn = null;
?>