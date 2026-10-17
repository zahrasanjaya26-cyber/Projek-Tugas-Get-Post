<?php
if ($page == 'hasil') {
    if (
        !isset($_POST['nama']) ||
        !isset($_POST['kelas']) ||
        !isset($_POST['pesan'])
    ) {
        header("Location: index.php?page=form");
        exit;
    }

    $nama  = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $pesan = $_POST['pesan'];
}
?>

<?php if ($page == 'form') : ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<div class="container kecil">
    <h2>Form Pesan</h2>
    <p>Silahkan Diisi Mahasiswa Kesayangannya Adek Adel</p>

        <form action="index.php?page=hasil" method="post">
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" required>

        <label for="kelas">Kelas</label>
        <input type="text" id="kelas" name="kelas" required>

        <label for="pesan">Pesan / Kesan</label>
        <textarea id="pesan" name="pesan" rows="4" required></textarea>

        <br><br>

        <button type="submit" class="btn-detail">Kirim</button>
        <a class="btn-detail" href="index.php">Kembali</a>
    </form>
</div>

<?php elseif ($page == 'hasil') : ?>

<div class="container kecil">
    <h2>Pesan Berhasil Dikirim</h2>
    <p>Terima kasih, <?= $nama; ?>!</p>

    <table class="info">
        <tr><td>Nama</td><td>: <?= $nama; ?></td></tr>
        <tr><td>Kelas</td><td>: <?= $kelas; ?></td></tr>
        <tr><td>Pesan / Kesan</td><td>: <?= $pesan; ?></td></tr>
    </table>

    <br>

    <a class="btn-detail" href="index.php">
        Kembali ke Halaman Utama
    </a>
</div>

<?php endif; ?>