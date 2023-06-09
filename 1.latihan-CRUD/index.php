<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Nilai</title>
    <!-- Tambahkan link CSS Bootstrap di bawah ini -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <a href="menampilkan.php" class="btn btn-primary">Melihat Data</a>
        <div class="text-center">
            <form action="input.php" method="post">
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
            </form>
        </div>
        <?php
        // require "conn.php";

        

        // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //     $nis = $_POST['nis'];
        //     $nama = $_POST['name'];
        //     $indo = $_POST['indo'];
        //     $inggris = $_POST['inggris'];
        //     $pipas = $_POST['pipas'];
        //     $mtk = $_POST['mtk'];
        //     $produktif = $_POST['produktif'];
        //     $sejarah = $_POST['sejarah'];

            // echo "Hasil Data!!";
            
            // Menghitung total
            // $total = $indo + $inggris + $pipas + $mtk + $produktif + $sejarah;
            // // Menghitung Rata-Rata
            // $rata = $total / 6;
            // // Menghitung Nilai Min
            // $min = min($indo, $inggris, $pipas, $mtk, $produktif, $sejarah);
            // // Menghitung Nilai Max
            // $max = max($indo, $inggris, $pipas, $mtk, $produktif, $sejarah);

        //     // Menampilkan
        //     echo "<p>total Total : " . $total . "</p>";
        //     echo "<p>Rata Rata : " . $rata . "</p>";
        //     echo "<p>Nilai Max : " . $max . "</p>";
        //     echo "<p>Nilai Min : " . $min . "</p>";

        //     // Membuat Grade penilaian
        //     echo "<p>Grade penilaian: ";
        //     if ($rata >= 90) {
        //         echo "A";
        //     } elseif ($rata >= 80) {
        //         echo "B";
        //     } elseif ($rata >= 75) {
        //         echo "C";
        //     } else {
        //         echo "D";
        //     }
        // }
        // }
        ?>
    </div>

    

    <!-- Tambahkan skrip JavaScript Bootstrap di bawah ini (opsional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>