
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SIMS - Login</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <br><center><a class="navbar-brand"><i class="fa fa-envelope"></i><b> SIMS FISIP</b></a></center>
      <div class="card-body">
        <form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">
          <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input class="form-control" id="username" name="username" type="text"  required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="password" name="password" type="password" required>
          </div>
					<div class="form-group">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="prodi">Prodi</label>
            </div>
            <select class="custom-select" id="prodi" name="prodi">
              <option selected>Pilih ...</option>
              <option value="Sosiologi">Sosiologi</option>
              <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
              <option value="Psikologi">Psikologi</option>
              <option value="Ilmu Politik">Ilmu Politik</option>
              <option value="Hubungan Internasional">Hubungan Internasional</option>
              <option value="Ilmu Pemerintaha">Ilmu Pemerintahan</option>
              <option value="Pasca Sarjana">Pasca Sarjana</option>
            </select>
          </div>
					</div>
          <input type="submit" class="btn btn-info btn-block" value="Login">.
        </form>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>



</body>

</html>
