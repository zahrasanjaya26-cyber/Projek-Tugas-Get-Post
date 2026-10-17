<?php
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
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<div class="container kecil">
    <h2>Pesan Berhasil Dikirim</h2>
    <p>Terima kasih, <?= htmlspecialchars($nama); ?>!</p>

    <table class="info">
        <tr>
            <td>Nama</td>
            <td>: <?= htmlspecialchars($nama); ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>: <?= htmlspecialchars($kelas); ?></td>
        </tr>
        <tr>
            <td>Pesan / Kesan</td>
            <td>: <?= nl2br(htmlspecialchars($pesan)); ?></td>
        </tr>
    </table>

    <br>

    <a class="btn-detail" href="index.php">
        Kembali ke Halaman Utama
    </a>
</div>