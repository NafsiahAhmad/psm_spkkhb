<?php
include_once 'dbcon.php';
$sql = "DELETE FROM pentadbir WHERE adminID='" . $_GET["adminID"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Padam pentadbir berjaya!');</script>";
    echo "<script>window.location.href='admin_senaraipentadbir.php';</script>";

} else {
    echo "<script>alert('Ralat! Padam pentadbir tidak berjaya.')</script>" . mysqli_error($conn);
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

    $sql = "DELETE FROM pentadbir WHERE adminID ='" . $_GET["adminID"] . "'";

    $conn->exec($sql);
    echo "<script>alert('Rekod pentadbir berjaya dipadam!')</script>";
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$conn = null;
?>