<?php include 'dbcon.php' ?>

<?php
session_start();

if(!isset($_SESSION['username']) || $_SESSION['role']!="pentadbir"){
    header("location:index.php");
}

$username = $_SESSION['username'];
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SPKKHB</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    #services{
   	width: 99%;
    margin: 1px auto;
   	border: 5px solid #FFFFFF;
   }
   #img_div{
   	width: 80%;
   	padding: 10px;
   	margin: 25px auto;
   	border: 2px solid #0099cc;
    background:linear-gradient(to right, #66ccff 0%, #ccffff 100%); 
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
    </style>

  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo"><b>Pentadbir </b><small>(<?= $username; ?>)</small></a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          
          <div class="navbar-custom-menu">
         
           
          </div>
        </nav>
      </header>

      <!-- =============================================== -->

 
      <?php
        include 'menu_admin.php';
      ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <section class="content">
          <!-- COLOR PALETTE -->
          <div class='box box-default'>
            <div class='box-header with-border'>
              <h3 class='box-title'><i class="fa fa-tag"></i> Halaman Utama</h3>
            </div>
            <p><center>Selamat Datang! <?= $username; ?></center></p>
            <div class='box-body'>


        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-primary elevation-1"><img src="images/o.png" alt="..." class="img-thumbnail"></span>

            <div class="info-box-content">
            <span class="info-box-text">Temujanji Yang Menunggu</span>
            <span class="info-box-number text-right">
            <?php
            foreach($conn->query('SELECT statusTempah,COUNT(*)
            FROM slottempahan WHERE statusTempah="Menunggu";') as $row) {
            echo "<tr>";
            echo "<td>" . $row['COUNT(*)'] . "</td>";
            echo "</tr>";
            }
            ?>
            </span>
            </div>
        </div>
  
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-success elevation-1"><img src="images/i.png" alt="..." class="img-thumbnail"></i></span>
            <div class="info-box-content">
            <span class="info-box-text">Temujanji Yang Diterima</span>
            <span class="info-box-number text-right">
            <?php
            foreach($conn->query('SELECT statusTempah,COUNT(*)
            FROM slottempahan WHERE statusTempah="Diterima";') as $row) {
            echo "<tr>";
            echo "<td>" . $row['COUNT(*)'] . "</td>";
            echo "</tr>";
            }
            ?>
            </span>
            </div>
        </div>

        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-light"><img src="images/x.png" alt="..." class="img-thumbnail"></span>
            <div class="info-box-content">
            <span class="info-box-text">Temujanji Yang Dibatalkan</span>
            <span class="info-box-number text-right">
            <?php
            foreach($conn->query('SELECT statusTempah,COUNT(*)
            FROM slottempahan WHERE statusTempah="Dibatalkan";') as $row) {
            echo "<tr>";
            echo "<td>" . $row['COUNT(*)'] . "</td>";
            echo "</tr>";
            }
            ?>
            </span>
            </div>
        </div>



            
          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        
        <strong>2021 SPKKHB. All rights reserved.</strong> 
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
   
  </body>
</html>
