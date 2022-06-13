<?php include 'functions/actionupdateslot.php'?>

<?php include 'dbcon.php' ?>

<?php
session_start();

if(!isset($_SESSION['username']) || $_SESSION['role']!="pelanggan"){
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
    <!-- Morris charts -->
    <link href="plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />


  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo"><b>Pelanggan</b></a>
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

      <!-- Left side column. contains the sidebar -->
      <?php
        include 'menu_pelanggan.php';
      ?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        

        <!-- Main content -->
        <section class="content">
          <!-- COLOR PALETTE -->
          <div class='box box-default'>
            <div class='box-header with-border'>
              <h3 class='box-title'><i class="fa fa-tag"></i> Kemaskini Slot Temujanji</h3>
            </div>
            <div class='box-body'>
   
            <form name="frmUser" method="post" action="">
            <div><?php if(isset($message)) { echo "<script>alert('$message');</script>";
            echo "<script>window.location.href='pelanggan_tempah.php';</script>"; } ?>
            </div>
            <table border="0" width="80%" align="center" cellspacing="10">
			   </tr>
			   <tr>
					<td colspan="3">&nbsp;</td>
			   </tr>
			   <tr>
          <input type="hidden" name="id" value="<?php echo $row[0]; ?>"  /></td>
			   </tr>
			   <tr>
					<td colspan="3">&nbsp;</td>
			   </tr>
			    <tr>
					<td><b>Nama Kucing</b></td><td>:</td><td><input type="text" name="kucing" class="txtField" value="<?php echo $row['namaKucingTempah']; ?>"></td>
			   </tr>
         <tr>
					<td colspan="3">&nbsp;</td>
			   </tr>
         <tr>
					<td><b>Hari/Tarikh Temujanji</b></td><td>:</td><td><input type="date" name="tarikhTempah" class="control-form" value="<?php echo $row['tarikhTempah']; ?>"></td>
			   </tr>
         <tr>
					<td colspan="3">&nbsp;</td>
			   </tr>
         <tr>
					<td><b>Masa Tempahan Temujanji</b></td><td>:</td><td><?php echo $row['masaTempah']; ?>&nbsp;&nbsp;<select type="text" class="custom-select" name="masa" required>
                    <option disabled selected>-- Pilih Masa Baru --</option>
                    <option <?php echo isset($masa['masa']) && $masa['masa'] == "10:00AM-10:30AM" ? "selected": "" ?>>10:00AM-10:30AM</option>
                    <option <?php echo isset($masa['masa']) && $masa['masa'] == "10:40AM-11.10AM" ? "selected": "" ?>>10:40AM-11.10AM</option>
                    <option <?php echo isset($masa['masa']) && $masa['masa'] == "11.20AM-11.50AM" ? "selected": "" ?>>11.20AM-11.50AM</option>
                    <option <?php echo isset($masa['masa']) && $masa['masa'] == "10:00AM-10:30AM" ? "selected": "" ?>>12:00PM-12:30PM</option>
                    <option <?php echo isset($masa['masa']) && $masa['masa'] == "10:40AM-11.10AM" ? "selected": "" ?>>12:40PM-1.00PM</option>
                    <option <?php echo isset($masa['masa']) && $masa['masa'] == "11.20AM-11.50AM" ? "selected": "" ?>>2.00PM-2.30APM</option>
                    <option <?php echo isset($masa['masa']) && $masa['masa'] == "10:00AM-10:30AM" ? "selected": "" ?>>2:40PM-3:10PM</option>
                    <option <?php echo isset($masa['masa']) && $masa['masa'] == "10:40AM-11.10AM" ? "selected": "" ?>>3:20PM-3.50PM</option>
                    <option <?php echo isset($masa['masa']) && $masa['masa'] == "11.20AM-11.50AM" ? "selected": "" ?>>4.00PM-4.30APM</option>
                    <option <?php echo isset($masa['masa']) && $masa['masa'] == "10:00AM-10:30AM" ? "selected": "" ?>>4:40PM-5:00PM</option>
                    </select></td>
			   </tr>
         <tr>
					<td colspan="3">&nbsp;</td>
			   </tr>
			   	<tr>
					<td colspan="3" align="center"><input type="submit" name="submit" value="Kemaskini" class="button"></td>
			   </tr>


			   </table>
       
				</form>
          </div><!-- /.box -->
          
          

          
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
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    
  

  </body>
</html>