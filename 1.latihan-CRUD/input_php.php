<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input</title>
</head>
<body>
    <a href="index.php">Kembali</a>
    <?php
    require 'conn.php'; // Memanggil file koneksi

    class tambahData
    {
        private $conn; //sebuah properti (variabel) yang dimiliki oleh kelas Data. Properti tersebut bertipe private, yang berarti hanya dapat diakses secara langsung dari dalam kelas itu sendiri.
        // Konstruktor merupakan sebuah metode khusus dalam sebuah kelas yang akan dieksekusi secara otomatis saat objek kelas tersebut dibuat. 
        public function __construct($conn) 
        {
            $this->conn = $conn;
        }
        //Metode tambahData: Metode ini digunakan untuk menambahkan data ke dalam tabel db_nilai. Metode ini menerima parameter $data yang merupakan sebuah array yang berisi data yang akan ditambahkan ke tabel.
        public function tambahData($data)
        {
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
            //INSERT INTO db_nilai``: Mengindikasikan bahwa data akan dimasukkan ke dalam tabel db_nilai.
            $sql = "INSERT INTO `db_nilai`
            (`id`, `nis`, `nama`, `indonesia`, `inggris`, `pipas`, `mtk`, `produktif`, `sejarah`, `total`, `rata`, `max`, `min`)
            VALUES 
            ('', '$nis', '$nama', '$indonesia', '$inggris', '$pipas', '$mtk', '$produktif', '$sejarah', '$jumlah', '$rata', '$max', '$min')";
            //digunakan untuk mengeksekusi pernyataan SQL yang disimpan dalam variabel $sql pada objek koneksi database yang disimpan dalam properti $conn pada objek saat ini.
            mysqli_query($this->conn, $sql); //Fungsi mysqli_query() adalah fungsi bawaan PHP yang digunakan untuk menjalankan pernyataan SQL ke database yang ditentukan. 
            // digunakan untuk mengembalikan jumlah baris yang terpengaruh oleh operasi SQL yang telah dijalankan sebelumnya.
            return mysqli_affected_rows($this->conn); 
            //Fungsi mysqli_affected_rows() adalah fungsi bawaan PHP yang digunakan untuk mendapatkan jumlah baris yang terpengaruh oleh operasi SQL terakhir yang dieksekusi pada koneksi database yang ditentukan. 
        }
    }
    //digunakan untuk membuat objek dari kelas tambahData dan menyimpannya dalam variabel $tambahData. 
    $tambahData = new tambahData($conn);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {//untuk memeriksa metode permintaan (request method) yang digunakan untuk mengakses halaman atau skrip PHP saat ini. Pemeriksaan ini dilakukan untuk memastikan bahwa permintaan yang diterima adalah metode POST.
        if ($tambahData->tambahData($_POST) > 0) {
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
    

// //Sebelum Menjadi OOP
    // require 'conn.php'; //memanggil file koneksi

    // // Input Data Ke Dalam Database
    // function tambahData($data)
    // {
    //     global $conn;
    //     $nis = $data["nis"];
    //     $nama = $data["name"];
    //     $indonesia = $data["indo"];
    //     $inggris = $data["inggris"];
    //     $pipas = $data["pipas"];
    //     $mtk = $data["mtk"];
    //     $produktif = $data["produktif"];
    //     $sejarah = $data["sejarah"];

    //     // Menghitung Jumlah
    //     $jumlah = $indonesia + $inggris + $pipas + $mtk + $produktif + $sejarah;

    //     // Menghitung Rata-rata
    //     $rata = $jumlah / 6;

    //     // Menghitung Nilai Maksimum
    //     $max = max($indonesia, $inggris, $pipas, $mtk, $produktif, $sejarah);

    //     // Menghitung Nilai Minimum
    //     $min = min($indonesia, $inggris, $pipas, $mtk, $produktif, $sejarah);

    //     $sql = "INSERT INTO `db_nilai`
    //     (`id`, `nis`, `nama`, `indonesia`, `inggris`, `pipas`, `mtk`, `produktif`, `sejarah`, `total`, `rata`, `max`, `min`)
    //     VALUES 
    //     ('', '$nis', '$nama', '$indonesia', '$inggris', '$pipas', '$mtk', '$produktif', '$sejarah', '$jumlah', '$rata', '$max', '$min')";

    //     mysqli_query($conn, $sql); //

    //     return mysqli_affected_rows($conn);
    // }

    // // Jika tombol submit di klik, jalankan perintah ini
    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     // Jika tambahData($_POST) lebih besar dari 0, maka jalankan
    //     if (tambahData($_POST) > 0) {
    //         echo "<script> 
    //             alert('Data berhasil diinput');
    //             window.location.href = 'index.php';
    //         </script>";
    //     } else {
    //         echo "<script>
    //             alert('Gagal input');
    //             window.location.href = 'index.php';
    //         </script>";
    //     }
    // }
?>
</body>
</html>
