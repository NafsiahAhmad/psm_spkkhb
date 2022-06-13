<?php
include_once 'dbcon.php';
$sql = "DELETE FROM kucing WHERE catID='" . $_GET["catID"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Padam kucing berjaya!');</script>";
    echo "<script>window.location.href='admin_senaraikucing.php';</script>";

} else {
    echo "<script>alert('Ralat! Padam kucing tidak berjaya.')</script>" . mysqli_error($conn);
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

    $sql = "DELETE FROM kucing WHERE catID ='" . $_GET["catID"] . "'";

    $conn->exec($sql);
    echo "<script>alert('Rekod kucing berjaya dipadam!')</script>";
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$conn = null;
?>