<?php
include_once 'dbcon.php';
$sql = "DELETE FROM informasi WHERE infoID='" . $_GET["infoID"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Padam informasi berjaya!');</script>";
    echo "<script>window.location.href='pekerja_senaraiinfo.php';</script>";

} else {
    echo "<script>alert('Ralat! Padam informasi tidak berjaya.')</script>" . mysqli_error($conn);
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

    $sql = "DELETE FROM informasi WHERE infoID ='" . $_GET["infoID"] . "'";

    $conn->exec($sql);
    echo "<script>alert('Informasi berjaya dipadam!')</script>";
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$conn = null;
?>