<?php
session_start();
include 'koneksi.php';
if ($_SESSION['stat_login'] != true) {
    echo '<script>window.location="login.php"</script>';
}
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
        <h2>Data Peserta</h2>
        <div class="box">
            <a href="cetak-peserta.php" target="_blank" class="btn-cetak">Print</a>
            <table class="table" border="1">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>ID Pendaftaran</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $list_peserta = mysqli_query($conn, "SELECT * FROM tbl_pendaftaran");
                    while ($row  = mysqli_fetch_array($list_peserta)) {


                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['id_pendaftaran'] ?></td>
                            <td><?php echo $row['nm_peserta'] ?></td>
                            <td><?php echo $row['jk'] ?></td>
                            <td>
                                <a href="detail-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>">Detail</a> ||
                                <a href="delete-peserta.php?id=<?php echo $row['id_pendaftaran'] ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?')">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
</body>

</html>