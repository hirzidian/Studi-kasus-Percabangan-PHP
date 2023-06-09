<?php
session_start();
if(isset($_SESSION['username'])){
//    header("Location:input.php");
echo $_SESSION['username'];  //cek SESSION
} else if(isset($_POST['submit'])){
   $conn = mysqli_connect("localhost", "root", "", "db");

   $username = $_POST['username'];
   $password = $_POST['password'];

   $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
   $result = mysqli_query($conn, $sql);

   if(mysqli_num_rows($result) > 0){ 
      $data = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $data['username'];
      header("Location:input.php");
   } else {
      echo "<script>
      alert('Username atau Password Salah ')
      document.location.href = 'index.php'; 
      </script>";
   }      
}

// require "conn.php"; // Memanggil file koneksi ke database

// session_start(); // Memulai session

// // Cek apakah pengguna sudah login atau belum
// if (isset($_SESSION['username'])) {
//     header('Location: input.php'); // Jika sudah login, alihkan ke halaman .php
// }

// // Memproses data login jika tombol submit ditekan
// if (isset($_POST["submit"])) {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

//     // Mengecek kecocokan data login pada tabel 'login'
//     $sql = "SELECT * FROM `login` WHERE username='$username' AND password='$password'";
//     $result = mysqli_query($server, $sql);

//     // Jika data ditemukan, buat session dan alihkan ke halaman beranda.php
//     if ($result->num_rows > 0) {
//         $row = mysqli_fetch_assoc($result);
//         $_SESSION['username'] = $row['username'];
//         $_SESSION['nama'] = $row['nama'];
//         $cekSesi = $_SESSION['username'];
//         echo $cekSesi;
//         header('Location: input.php');
//     } else {
//         echo "<script>
//         alert
//         ('Email atau password Anda salah. Silahkan coba lagi!')
//         </script>";
//     }
// }
