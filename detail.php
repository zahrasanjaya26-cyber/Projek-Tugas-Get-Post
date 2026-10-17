<?php
if (
    !isset($_GET['nim']) ||
    !isset($_GET['nama']) ||
    !isset($_GET['jurusan']) ||
    !isset($_GET['email']) ||
    !isset($_GET['nilai']) ||
    !isset($_GET['grade']) ||
    !isset($_GET['status'])
) {
    header("Location: index.php");
    exit;
}

$nim     = $_GET['nim'];
$nama    = $_GET['nama'];
$jurusan = $_GET['jurusan'];
$email   = $_GET['email'];
$nilai   = $_GET['nilai'];
$grade   = $_GET['grade'];
$status  = $_GET['status'];
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
    <h2>Detail Mahasiswa</h2>
    <p>Data diterima melalui request method GET</p>

    <table class="info">
        <tr><td>NIM</td><td>: <?= $nim; ?></td></tr>
        <tr><td>Nama</td><td>: <?= $nama; ?></td></tr>
        <tr><td>Jurusan</td><td>: <?= $jurusan; ?></td></tr>
        <tr><td>Email</td><td>: <?= $email; ?></td></tr>
        <tr><td>Nilai</td><td>: <?= $nilai; ?></td></tr>
        <tr><td>Grade</td><td>: <?= $grade; ?></td></tr>
        <tr><td>Status</td><td>: <?= $status; ?></td></tr>
    </table>

    <br>

    <a class="btn-detail" href="index.php">Kembali</a>
</div>