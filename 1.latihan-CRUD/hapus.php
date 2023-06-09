<?php
    require "conn.php";

    function hapus($id){
        //panggil variabel global
        global $conn;
        //Fungsi mysqli_query() adalah fungsi dalam PHP yang digunakan untuk menjalankan pernyataan SQL
        //$conn, Hapus dari nama data base (db_nlai) bagian id
        //id itu beda beda jadi jika kita hapus bagian id makan yag ke hapus hanya 1 yang id itu saja
        mysqli_query($conn, "DELETE FROM `db_nilai` WHERE id = $id");
        return mysqli_affected_rows($conn); // fungsi mysqli_affected_rows adalah untuk mengembalikan jumlah baris
    }

    $id = $_GET ["id"];

    if ( hapus( $id ) > 0  ) {
        echo " 
        <script>
            alert ('data berhasil di hapus') ;
            document.location.href = 'menampilkan.php';
        </script>
            ";
    } else {
        echo " 
        <script>
             alert ('data gagal di hapus') ;
             document.location.href = 'menampilkan.php';
        </script>";
    }

    return mysqli_affected_rows($conn);
?>