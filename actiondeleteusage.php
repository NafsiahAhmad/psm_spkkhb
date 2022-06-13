<?php
include_once 'dbcon.php';
$sql = "DELETE FROM rekodgunaubat WHERE usageID='" . $_GET["usageID"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Padam rekod penggunaan ubat berjaya!');</script>";
    echo "<script>window.location.href='admin_rekodgunaubat.php';</script>";

} else {
    echo "<script>alert('Ralat! Padam rekod penggunaan ubat tidak berjaya.')</script>" . mysqli_error($conn);
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

    $sql = "DELETE FROM rekodgunaubat WHERE usageID ='" . $_GET["usageID"] . "'";

    $conn->exec($sql);
    echo "<script>alert('Rekod penggunaan ubat berjaya dipadam!')</script>";
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$conn = null;
?>