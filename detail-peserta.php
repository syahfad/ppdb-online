<?php
session_start();
include 'koneksi.php';
if ($_SESSION['stat_login'] != true) {
    echo '<script>window.location="login.php"</script>';
}

$peserta = mysqli_query($conn, "SELECT * FROM tbl_pendaftaran WHERE id_pendaftaran = '" . $_GET['id'] . "'");
$objek = mysqli_fetch_object($peserta);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSB Online Universitas Gunadarma | Admin</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1><a href="berand.php">Admin PSB Online</a></h1>
        <ul>
            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="data-peserta.php">Data Peserta</a></li>
            <li><a href="keluar.php">Keluar</a></li>
        </ul>
    </header>

    <section class="content">
        <h2>Detail Peserta</h2>
        <div class="box">
            <table class="table-data" border="0">
                <tr>
                    <td>Kode Pendaftaran</td>
                    <td>:</td>
                    <td><?php echo $objek->id_pendaftaran ?></td>
                </tr>
                <tr>
                    <td>Tahun Ajaran</td>
                    <td>:</td>
                    <td><?php echo $objek->th_ajaran ?></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><?php echo $objek->jurusan ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><?php echo $objek->nm_peserta ?></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><?php echo $objek->tmp_lahir ?></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><?php echo $objek->tgl_lahir ?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $objek->jk ?></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td><?php echo $objek->agama ?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo $objek->almt_peserta ?></td>
                </tr>
            </table>
        </div>
    </section>
</body>

</html>