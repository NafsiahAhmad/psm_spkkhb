<?php include 'actionupdatecustomerprofile.php'?>
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
              <h3 class='box-title'><i class="fa fa-tag"></i> Kemaskini Pelanggan</h3>
            </div>
            <div class='box-body'>
   
            <form name="frmUser" method="post" action="">
            <div><?php if(isset($message)) { echo "<script>alert('$message');</script>";
            echo "<script>window.location.href='pelanggan_profil.php';</script>"; } ?>
            </div>
            <table border="0" width="80%" align="center" cellspacing="10">
            <?php 
    $records = mysqli_query($conn,"select * from pelanggan where custUsername = '$username'"); // fetch data from database
while($row = mysqli_fetch_array($records)){
?>
			   </tr>
			   <tr>
					<td colspan="3">&nbsp;</td>
			   </tr>
			   <tr>
					<td><b>ID Pengguna</b></td><td>:</td><td><input type="text" name="username" value="<?php echo $row['custUsername']; ?>">
                <input type="hidden" name="id" value="<?php echo $row[0]; ?>"  /></td>
			   </tr>
			   <tr>
         <td colspan="3">&nbsp;</td> 
         </tr>
         <tr>
					<td><b>Kata Laluan</b></td><td>:</td><td><input type="text" name="password" class="txtField" value="<?php echo $row['custPass']; ?>"></td>
			   </tr>
         <tr>
         <td colspan="3">&nbsp;</td> 
         </tr>
			    <tr>
					<td><b>Nama</b></td><td>:</td><td><input type="text" name="name" class="txtField" value="<?php echo $row['custName']; ?>"></td>
			   </tr>
         <tr>
         <td colspan="3">&nbsp;</td> 
         </tr>
			    <tr>
					<td><b>Nombor Telefon</b></td><td>:</td><td><input type="text" name="phone" class="txtField" value="<?php echo $row['custPhone']; ?>"></td>
			   </tr>
         <tr>
         <td colspan="3">&nbsp;</td> 
         </tr>
			    <tr>
					<td><b>Email</b></td><td>:</td><td><input type="text" name="email" class="txtField" value="<?php echo $row['custMail']; ?>"></td>
			   </tr>
         <tr>
         <td colspan="3">&nbsp;</td> 
         </tr>
			    <tr>
					<td><b>Address</b></td><td>:</td><td><input type="text" name="address" class="txtField" value="<?php echo $row['custAddress']; ?>"></td>
			   </tr>
         <tr>
					<td colspan="3">&nbsp;</td>
			   </tr>
			   	<tr>
					<td colspan="3" align="center"><input type="submit" name="submit" value="Kemaskini" class="button"></td>
			   </tr>
         
         <?php
				 }
				  ?>
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
