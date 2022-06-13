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
    <link href="css/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
  .container{background:#fff; border-radius: 10px; width: 500px;}
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
              <h3 class='box-title'><i class="fa fa-tag"></i> Laporan Stok Ubat Semasa</h3>
            </div>
            <div class='box-body'>
   
            <div class="col-sm-1">
                    <button onclick="printOut()" type="submit" class="btn btn-light">Cetak</button>						
              </div>

            <div class='container'>
            <?php  
      include ('dbcon.php');
      $query1 = $conn->query("select `ubatName` as '1', `ubatQty` as '2' FROM stokubat GROUP BY `ubatName` ORDER BY `ubatName`;");

      foreach($query1 as $data1)
    { 
    $ubatname[] = $data1[1];
    $ubatqty[] = $data1[2];
  }

?>

<div class="col-xl-6">
<div class="card">
<div class="card-header">
</div>
<div  class="card-body">
  <canvas id="myChartDoughnut"></canvas>
</div>
   <script>
  // === include 'setup' then 'config' above ===
  const labelsDoughnut = <?php echo json_encode($ubatname) ?>;
  const dataDoughnut = {
    labels: labelsDoughnut,
    datasets: [{
      label: 'Stok Ubat Semasa',
      data: <?php echo json_encode($ubatqty) ?>,
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(201, 203, 207, 0.2)'
      ],
      borderColor: [
        'rgb(255, 99, 132)',
        'rgb(255, 159, 64)',
        'rgb(255, 205, 86)',
        'rgb(75, 192, 192)',
        'rgb(54, 162, 235)',
        'rgb(153, 102, 255)',
        'rgb(201, 203, 207)'
      ],
      borderWidth: 1
    }]
  };

  const configDoughnut = {
    type: "doughnut",
    data: dataDoughnut,
    options: {
   
    },
  };

  var myChartDoughnut = new Chart(
    document.getElementById('myChartDoughnut'),
    configDoughnut
  );
</script>     
 </div>
           </div>      
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
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/Chart.min.js"></script>
    <script type="text/javascript">
        function printOut()
        {
            window.print();
        }
    </script>
   
  </body>
</html>