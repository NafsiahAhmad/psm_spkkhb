<?php 

	session_start();
	session_destroy();
	echo "<script>alert('Log keluar berjaya!');</script>";
	echo "<script>window.location.href='index.php';</script>";

?>