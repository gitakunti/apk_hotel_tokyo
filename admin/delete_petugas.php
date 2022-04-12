<?php
require '../includes/koneksi.php';
$id=$_GET['id'];

$sql=mysqli_query($conn, "DELETE FROM petugas where id_petugas='$id' ");

if ($sql)
{
    ?>
    <script type="text/javascript">
    alert ('Data Berhasil Dihapus');
    window.location='lihat_petugas.php';
    </script>
    <?php
}
?>