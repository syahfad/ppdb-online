<?php
include 'koneksi.php';
if ($_SESSION['stat_login'] != true) {
    echo '<script>window.location="login.php"</script>';
}
if (isset($_GET['id'])) {
    $delete = mysqli_query($conn, "DELETE FROM tbl_pendaftaran where id_pendaftaran = '" . $_GET['id'] . "'");
    echo '<script>window.location="data-peserta.php"</script>';
}
