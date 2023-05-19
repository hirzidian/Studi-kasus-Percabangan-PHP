<?php
    $jumlah_piring = 5;
    $piring_dicuci = 0;


    while ($piring_dicuci < $jumlah_piring){
        echo "Mencuci piring ke " . ($piring_dicuci + 1) . "<br>";
            $piring_dicuci++;
        }
    

    echo "Semua Piring Telah Di Cuci"
?>

    <hr>
    <hr>
    <!DOCTYPE html>
<html>
<head>
    <title>Form Pembelian Baju</title>
</head>
<body>
    <form action="" method="post">
        Berapa baju yang dibeli? <br>
        <input type="number" name="baju">
        <button type="submit" name="submit">Kirim</button>
    </form>
    
    <?php
    if(isset($_POST['submit'])){
        $baju = $_POST['baju'];
        $i = 1;

        while($i <= $baju){
            echo "Baju $i <br>";
            $i++;
        }
    }
    ?>
</body>
</html>
