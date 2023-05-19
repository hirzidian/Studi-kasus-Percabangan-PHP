<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
<h2>Studi kasus 2</h2>
    <form action="" method="post">
        <h3>Masukan NO Pendaftaran Anda</h3>
        <span>Masukan No 1-100<span><br>
        <input type="number" name="number" >
        <br>
        <button type="submit">Kirim</button>
    </form>
    <br>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $A = ($_POST['number'] >= 1 && $_POST['number'] <= 30);
        $B = ($_POST['number'] >= 31 && $_POST['number'] < 60);
        $C = ($_POST['number'] >= 61 && $_POST['number'] < 90);
        $D = ($_POST['number'] >= 91 && $_POST['number'] < 100);
    
        if ($A) {
            echo "Anda Masuk Rombel PPLG X-10";
        } else if ($B) {
            echo "Anda Masuk Rombel PPLG X-15";
        } else if ($C) {
            echo "Anda Masuk Rombel PPLG X-20";
        } else if ($D) {
            echo "Anda Masuk Rombel PPLG X-25";
        }
    }

?>
</center>
    
</body>
</html>