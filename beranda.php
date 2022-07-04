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
        <h2>Beranda</h2>
        <div class="box">
            <h3>Hi <?php echo $_SESSION['nama'] ?>, Selamat Datang di Tampilan Admin PSB Online</h3>
        </div>
    </section>
</body>

</html>