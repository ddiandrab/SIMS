<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>SIMS - Surat Keterangan PNS</title>
  <!-- Bootstrap core CSS-->
  <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html"><i class="fa fa-envelope"></i><b> SIMS FISIP</b></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Surat Keterangan PNS">
          <a class="nav-link" href="SKM_PNS.html">
            <i class="fa fa-fw fa-sticky-note"></i>
            <span class="nav-link-text"><b>Surat Keterangan PNS</b></span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Surat Keterangan Swasta">
          <a class="nav-link" href="SKM_SWASTA.html">
            <i class="fa fa-fw fa-sticky-note"></i>
            <span class="nav-link-text">Surat Keterangan Swasta</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Surat Keterangan Lulus">
          <a class="nav-link" href="SKL.html">
            <i class="fa fa-fw fa-mortar-board"></i>
            <span class="nav-link-text">Surat Keterangan Lulus</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Surat Terminal">
          <a class="nav-link" href="S_TERMINAL.html">
            <i class="fa fa-fw fa-id-card"></i>
            <span class="nav-link-text">Surat Terminal</span>
          </a>
        </li>
<br>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Pengaturan">
          <a class="nav-link" href="#">
            <i class="fa fa-fw fa-gears"></i>
            <span class="nav-link-text">Pengaturan</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="About">
          <a class="nav-link" href="#">
            <i class="fa fa-fw  fa-user-circle"></i>
            <span class="nav-link-text">About</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>

      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link">
						 <?php echo $this->session->userdata("nama"); ?>
						 <?php echo " - " ?>
						 <?php echo $this->session->userdata("prodi"); ?>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">SIMS</a>
        </li>
        <li class="breadcrumb-item active">Surat Keterangan Mahasiswa PNS</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Data Mahasiswa</div>
        <div class="card-body">
          <div class="table-responsive">
            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h3 id="myModalLabel">Delete</h3>
                        </div>
                        <div class="modal-body">
                            <p></p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                            <button data-dismiss="modal" class="btn red" id="btnYes">Confirm</button>
                        </div>
   </div>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Program Studi</th>
                  <th>Peminatan</th>
                  <th>Lihat Data</th>
                  <th>Buat Surat</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Program Studi</th>
                  <th>Peminatan</th>
                  <th>Lihat Data</th>
                  <th>Buat Surat</th>
                </tr>
              </tfoot>
              <tbody>
                <tr>
                  <td>155150201111274</td>
                  <td>Ricky Irfandi</td>
                  <td>Ilmu Politik</td>
                  <td>Metode Ilmu Politik</td>
                  <td><button class="btn btn-primary" data-toggle="modal" data-target="#ModalLihatData"><i class="fa fa-eye"></i> Lihat Data</button></td>
                  <td><button class="btn btn-success"  onclick="location.href = 'CETAK_PNS.html';"><i class="fa fa-envelope"></i> Buat Surat</button></td>
                </tr>
                <tr>
                  <td>155150201111274</td>
                  <td>Desy Diandra B</td>
                  <td>Ilmu Politik</td>
                  <td>Metode Ilmu Politik</td>
                  <td><button class="btn btn-primary" data-toggle="modal" data-target="#ModalLihatData"><i class="fa fa-eye"></i> Lihat Data</button></td>
                  <td><button class="btn btn-success"  onclick="location.href = 'CETAK_PNS.html';"><i class="fa fa-envelope"></i> Buat Surat</button></td>
                </tr>
                <tr>
                  <td>155150201111274</td>
                  <td>Rafiwah Majida</td>
                  <td>Ilmu Politik</td>
                  <td>Metode Ilmu Politik</td>
                  <td><button class="btn btn-primary" data-toggle="modal" data-target="#ModalLihatData"><i class="fa fa-eye"></i> Lihat Data</button></td>
                  <td><button class="btn btn-success"  onclick="location.href = 'CETAK_PNS.html';"><i class="fa fa-envelope"></i> Buat Surat</button></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © SIMS FISIP 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Logout</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Apakah anda yakin ingin keluar ?.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="<?php echo base_url('index.php/login/logout'); ?>">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url(); ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="<?php echo base_url(); ?>vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url(); ?>vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url(); ?>js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url(); ?>js/sb-admin-datatables.min.js"></script>
  </div>

  <div class="modal fade" id="ModalLihatData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Data Mahasiswa</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <label for="NIM">NIM</label>
          <input class="form-control" id="NIM"  aria-describedby="emailHelp" placeholder="155515020" readonly>
          <br>
          <label for="NAMA">Nama</label>
          <input class="form-control" id="NAMA" placeholder="Ricky Irfandi" readonly>
          <br>
          <label for="JURUSAN">Jurusan</label>
          <input class="form-control" id="JURUSAN" placeholder="Ilmu Politik" readonly>
          <br>
          <label for="Keminatan">Keminatan</label>
          <input class="form-control" id="Keminatan" placeholder="Governance" readonly>
          <br>dst
          <br>..
          <br>.
          <br>.
          <br>.
          <br>.
          <br>.

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

</body>

</html>
