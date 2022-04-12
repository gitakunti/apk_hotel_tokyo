<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

   <!-- Custom fonts for this template -->
   <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

         <!-- DataTales Example -->
         <div class="card shadow mb-4">
            <div class="card-header py-3">
              
            </div>
            <div class="card-body">

            <h3 class="m-0 font-weight-bold text-secondary" align="center">Hotel Tokyo</h3>
            <h4 class="m-0 font-weight-bold text-secondary" align="center">Kabupaten Jember</h6>
                  <br><br><hr>
                  <h4 class="m-0 font-weight-bold text-secondary" align="center">Laporan Data Pesanan</h4>
                <br><br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                <tr>
                       <th>Nama Tamu</th>
                       <th>Tanggal Pesan</th>
                       <th>Check In</th>
                       <th>Check Out</th>
                       <th>Kamar</th>
                       <th>Jumlah Kamar</th>
                      
                    </tr>
                    <?php
                  require '../includes/koneksi.php';
                  
                  $sql=mysqli_query($conn, "SELECT * FROM tb_pelanggan JOIN tb_kamar ON tb_pelanggan.id_kamar = tb_kamar.id_kamar ORDER BY tb_pelanggan.tgl_pesan DESC LIMIT 20");
                  while ($data=mysqli_fetch_array($sql)) {

                  ?>

                  <tbody>
                    <tr>
                       <td><?php echo $data['nama_tamu']; ?></td>
                       <td><?php echo $data['tgl_pesan']; ?></td>
                       <td><?php echo $data['checkin']; ?></td>
                       <td><?php echo $data['checkout']; ?></td>
                       <td><?php echo $data['nama_kamar']; ?></td>
                       <td><?php echo $data['jml_kamar']; ?></td>
                      <td>

                  
                    </tr>
                    
                  </tbody>
                  <?php } ?>
                </table>
                <br>
                <br>
                </div>
              <h6 class="m-0 font-weight-bold text-secondary" align="right">Jember, <?php echo date('d M Y'); ?></h6>
              <h6 class="m-0 font-weight-bold text-secondary" align="right">Petugas,</h6>
              <br><br><br><br>
              
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      
      <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
