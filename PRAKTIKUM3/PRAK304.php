<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") { 
        $jumlah = $_POST["jumlah"];
    }
    if (isset($_POST['plus'])) {
        $jumlah++;
    }

    if (isset($_POST['minus'])) {
        $jumlah--;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK304</title>
</head>
<body>
    <?php
        if(empty($jumlah)):
    ?>

    <form action="" method="POST">
        Jumlah bintang <input type="text" name="jumlah"><br>
        <button type="submit" name="submit">Cetak</button>
    </form> 
    <br>

    <?php
        endif;
        if(!empty($jumlah)):
    ?>

    Jumlah bintang <?= $jumlah; ?>
    <br><br><br>

    <?php
        $i = 0;
        do{
            echo "<img src='star-images-9441.png' style='width:70px;height:70px;'>";
            $i++;
        } while ($i < $jumlah);
    ?>

    <form action="" method="post">
            <input type="text" name="jumlah" value="<?= $jumlah ?>" hidden>
            <button type="submit" name="plus" value="plus">tambah</button>
            <button type="submit" name="minus" value="minus">kurang</button>
    </form>

    <?php
        endif;
    ?>
    
</body>
</html>