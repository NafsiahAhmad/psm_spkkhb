<?php
include_once 'dbcon.php';
$sql = "DELETE FROM slottempahan WHERE slotID='" . $_GET["slotID"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Padam temujanji berjaya!');</script>";
    echo "<script>window.location.href='admin_senaraitemujanji.php';</script>";

} else {
    echo "<script>alert('Ralat! Padam temujanji tidak berjaya.')</script>" . mysqli_error($conn);
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

    $sql = "DELETE FROM slottempahan WHERE slotID ='" . $_GET["slotID"] . "'";

    $conn->exec($sql);
    echo "<script>alert('Slot temujanji berjaya dipadam!')</script>";
    }
catch(PDOException $e)
    {
    echo $sql . "
" . $e->getMessage();
    }

$conn = null;
?>