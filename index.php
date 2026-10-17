<?php
$daftar_mahasiswa = [
    [
        "nim" => "25001",
        "nama" => "Delia Mutiara",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "delia@upi.edu",
        "nilai" => 96,
        "grade" => "A"
    ],
    [
        "nim" => "25002",
        "nama" => "Zahra Apriyani Sanjaya",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email" => "april@upi.edu",
        "nilai" => 98,
        "grade" => "A"
    ],
    [
        "nim" => "25003",
        "nama" => "Fatia Nuri Ramdani",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email" => "fatia@upi.edu",
        "nilai" => 96,
        "grade" => "A"
    ],
    [
        "nim" => "25004",
        "nama" => "Salma Ashilah",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "salma@upi.edu",
        "nilai" => 92,
        "grade" => "A"
    ],
    [
        "nim" => "25005",
        "nama" => "Khoerul Sheva Marsya Fika",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "maca@upi.edu",
        "nilai" => 95,
        "grade" => "A"
    ]
];

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

if ($page == 'detail') {
    include 'detail.php';
    exit;
}

if ($page == 'form') {
    include 'form_pesan.php';
    exit;
}

if ($page == 'hasil') {
    include 'hasil_pesan.php';
    exit;
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h2>Daftar Nilai Mahasiswa</h2>
    <p>Mini Website PHP april</p>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Nilai</th>
                <th>Grade</th>
                <th>Status</th>
                <th>Detail</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $no = 1;

            foreach ($daftar_mahasiswa as $data) :
                if ($data['nilai'] >= 70) {
                    $status = "Lulus";
                    $kelas_status = "status-lulus";
                } else {
                    $status = "Tidak Lulus";
                    $kelas_status = "status-tidak";
                }

                $link = "index.php?page=detail"
                      . "&nim=" . urlencode($data['nim'])
                      . "&nama=" . urlencode($data['nama'])
                      . "&jurusan=" . urlencode($data['jurusan'])
                      . "&email=" . urlencode($data['email'])
                      . "&nilai=" . urlencode($data['nilai'])
                      . "&grade=" . urlencode($data['grade'])
                      . "&status=" . urlencode($status);
            ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['nim']; ?></td>
                <td><?= $data['nama']; ?></td>
                <td><?= $data['jurusan']; ?></td>
                <td><b><?= $data['nilai']; ?></b></td>
                <td><?= $data['grade']; ?></td>
                <td>
                    <span class="badge <?= $kelas_status; ?>">
                        <?= $status; ?>
                    </span>
                </td>
                <td>
                    <a class="btn-detail" href="<?= $link; ?>">
                        Lihat Detail
                    </a>
                </td>
            </tr>

            <?php endforeach; ?>
        </tbody>
    </table>

    <br>

    <a class="btn-detail" href="index.php?page=form">
        Isi Form Pesan
    </a>
</div>

</body>
</html>