<?php include 'dbcon.php'?>
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
              <h3 class='box-title'><i class="fa fa-tag"></i> Senarai Pelanggan</h3>
            </div>
            <div class='box-body'>
   
             
		<div>
    <div class="container">
	<p id="success"></p>
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
				<div class="col-sm-9">
					</div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>

						<th>BIL</th>
                        <th>ID PENGGUNA</th>
                        <th>NAMA</th>
					            	<th>NOMBOR TELEFON</th>
                        <th>EMAIL</th>
                        <th>ALAMAT</th>
                        <th>TINDAKAN</th>
                    </tr>
                </thead>
				<tbody>
				
				<?php
				$result = mysqli_query($conn,"SELECT * FROM pelanggan ORDER BY custUsername ASC");
					$i=1;
					while($row = mysqli_fetch_array($result)) {
				?>
				<tr id="<?php echo $row["custID"]; ?>">
					<td><?php echo $i; ?></td>
					<td><?php echo $row["custUsername"]; ?></td>
					<td><?php echo $row["custName"]; ?></td>
					<td><?php echo $row["custPhone"]; ?></td>
          <td><?php echo $row["custMail"]; ?></td>
          <td><?php echo $row["custAddress"]; ?></td>
          <td><a href="admin_kemaskinipelanggan.php?custID=<?php echo $row["custID"]; ?>"><i class="fa fa-pencil-square" style="font-size:24px;color:green "></i></a>
          <a href="actiondeletecustomer.php?custID=<?php echo $row["custID"]; ?>"><i class="fa fa-trash" style="font-size:24px;color:red"></i></a></td>
				</tr>
				<?php
				$i++;
				}
				?>
				</tbody>
			</table>
			
        </div>
    </div>


	</section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
	<footer>
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