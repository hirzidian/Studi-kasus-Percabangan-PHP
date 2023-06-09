<?php
require 'conn.php';

function ubahData($data)
{
    global $conn;
    $id = $data["id"];
    $name = htmlspecialchars($data["name"]);
    $nis = htmlspecialchars($data["nis"]);
    $indo = htmlspecialchars($data["indo"]);
    $inggris = htmlspecialchars($data["inggris"]);
    $pipas = htmlspecialchars($data["pipas"]);
    $mtk = htmlspecialchars($data["mtk"]);
    $produktif = htmlspecialchars($data["produktif"]);
    $sejarah = htmlspecialchars($data["sejarah"]);

    $query = "UPDATE students SET
        nama = '$name',
        nis = '$nis',
        indo = '$indo',
        inggris = '$inggris',
        pipas = '$pipas',
        mtk = '$mtk',
        produktif = '$produktif',
        sejarah = '$sejarah',
        jumlah = '$jumlah',
        rata = '$rata',
        max = '$max',
        min = '$min'
        WHERE id = $id
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

$id = $_GET["id"];
$result = mysqli_query($conn, "SELECT * FROM `db_nilai` WHERE id = $id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST["submit"])) {
    if (ubahData($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data gagal diubah');
            document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <form action="" method="post">
        <h2>Isi Biodata</h2>
        <div class="form-group">
            <label for="nis">NIS</label>
            <input type="number" class="form-control" name="nis" placeholder="NIS">
        </div>
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" name="name" placeholder="Nama">
        </div>
        <h2>Masukkan Nilai Anda</h2>
        <div class="form-group">
            <label for="indo">Indonesia</label>
            <input type="number" class="form-control" name="indo" placeholder="Indonesia">
        </div>
        <div class="form-group">
            <label for="inggris">Inggris</label>
            <input type="number" class="form-control" name="inggris" placeholder="Inggris">
        </div>
        <div class="form-group">
            <label for="pipas">Pipas</label>
            <input type="number" class="form-control" name="pipas" placeholder="Pipas">
        </div>
        <div class="form-group">
            <label for="mtk">MTK</label>
            <input type="number" class="form-control" name="mtk" placeholder="MTK">
        </div>
        <div class="form-group">
            <label for="produktif">Produktif</label>
            <input type="number" class="form-control" name="produktif" placeholder="Produktif">
        </div>
        <div class="form-group">
            <label for="sejarah">Sejarah</label>
            <input type="number" class="form-control" name="sejarah" placeholder="Sejarah">
        </div>
        <input type="submit" class="btn btn-primary" name="submit" value="Kirim">
        <a href="menampilkan.php" class="btn btn-secondary">Batal</a>
    </form>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
