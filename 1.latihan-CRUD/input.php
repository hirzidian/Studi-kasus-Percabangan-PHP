<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <a href ="index.php">Kembali</a>
<?php

    require 'conn.php'; //memanggil file koneksi

    // Input Data Ke Dalam Database
    function tambahData($data)
    {
        global $conn;
        $nis = $data["nis"];
        $nama = $data["name"];
        $indonesia = $data["indo"];
        $inggris = $data["inggris"];
        $pipas = $data["pipas"];
        $mtk = $data["mtk"];
        $produktif = $data["produktif"];
        $sejarah = $data["sejarah"];

        // Menghitung Jumlah
        $jumlah = $indonesia + $inggris + $pipas + $mtk + $produktif + $sejarah;

        // Menghitung Rata-rata
        $rata = $jumlah / 6;

        // Menghitung Nilai Maksimum
        $max = max($indonesia, $inggris, $pipas, $mtk, $produktif, $sejarah);

        // Menghitung Nilai Minimum
        $min = min($indonesia, $inggris, $pipas, $mtk, $produktif, $sejarah);

        $sql = "INSERT INTO `db_nilai`
        (`id`, `nis`, `nama`, `indonesia`, `inggris`, `pipas`, `mtk`, `produktif`, `sejarah`, `total`, `rata`, `max`, `min`)
        VALUES 
        ('', '$nis', '$nama', '$indonesia', '$inggris', '$pipas', '$mtk', '$produktif', '$sejarah', '$jumlah', '$rata', '$max', '$min')";

        mysqli_query($conn, $sql); //

        return mysqli_affected_rows($conn);
    }

    // Jika tombol submit di klik, jalankan perintah ini
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Jika tambahData($_POST) lebih besar dari 0, maka jalankan
        if (tambahData($_POST) > 0) {
            echo "<script> 
                alert('Data berhasil diinput');
                window.location.href = 'index.php';
            </script>";
        } else {
            echo "<script>
                alert('Gagal input');
                window.location.href = 'index.php';
            </script>";
        }
    }
?>
</body>
</html>
