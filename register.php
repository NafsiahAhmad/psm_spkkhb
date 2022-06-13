<?php include 'redirect.php';?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SPKKHB</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<style>
@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
    background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:center;
width:100%;
padding : 41.5px 0;
}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1); width: 500px;}
.container{padding: 60px 60px; position:relative;}
.container .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.container .copy-text i{color:#FEB58A;}
.container .copy-text a{color:#E36262;}
.container h2{margin-bottom:20px; font-weight:800; font-size:30px; color: #DE6262;}
.container h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-register{background: #DE6262; color:#fff; font-weight:600;}

div.topnav {
  background-color: #DE6262;
  overflow: auto;
  white-space: nowrap;
}

div.topnav a {
  display: inline-block;
  color: #FFF;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.topnav a:hover {
  background-color: #FFB88C;
  
}

div.topnav label {
  padding-right:16px; float: right; font-weight:800; font-size:30px; color: #fff;
  
}

</style>
</head>
<body>
<div class="topnav">
  <a href="index.php">Laman Utama</a>
  <a href="login.php">Log Masuk</a>
  <a href="register.php">Pendaftaran</a>
  <a href="hubungikami.php">Hubungi Kami</a>
  <label> SPKKHB </label>
</div>

<section class="login-block">
    <div class="container">
		    <h2 class="text-center">Daftar Pelanggan</h2>
  <div class="form-group">
  <form  method="post" name="register" action="actionregister.php"> 
    <label for="username" class="text-uppercase">ID Pengguna</label>
    <input type="text" class="form-control" name="username" required> 
  </div>

  <div class="form-group">
     <label for="password" class="text-uppercase">Kata Laluan</label>
    <input type="password" class="form-control" name="password" required>
  </div>

  <div class="form-group">
     <label for="password" class="text-uppercase">Sahkan Kata Laluan</label>
    <input type="password" class="form-control" name="repassword" required> 
  </div>

  <div class="form-group">
  <label for="name" class="text-uppercase">Nama</label>
    <input type="text" class="form-control" name="name" required> 
  </div>

  <div class="form-group">
  <label for="name" class="text-uppercase">Nombor Telefon</label>
    <input type="text" class="form-control" name="phone" required> 
  </div>

  <div class="form-group">
  <label for="name" class="text-uppercase">Email</label>
    <input type="text" class="form-control" name="email" required> 
  </div>

  <div class="form-group">
  <label for="name" class="text-uppercase">Alamat</label>
    <input type="text" class="form-control" name="address" required> 
  </div>

    <div class="form-group">
    <button type='submit' name="register" class="btn btn-danger btn-block float-right">Daftar</button>
  </div>

</form>   

    </div>
</section>
</body>
</html>