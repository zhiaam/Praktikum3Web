<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK302</title>
</head>
<body>
    <form action="" method="POST">
        Tinggi: <input type="text" name="jumlah"><br>
        Alamat Gambar: <input type="text" name="gambar"><br>
        <button type="submit" name="submit">Cetak</button>
    </form> 
    <br>

    <?php
        if (isset($_POST['submit'])){
            $jml = $_POST["jumlah"];

            $image = $_POST["gambar"];
            $imageData = base64_encode(file_get_contents($image));
            


            $i=0;
            while( $i<$jml ){
                $j=0;
                while( $j < $i ){
                    echo "&nbsp&nbsp&nbsp ";
                    $j++;
                }
                $j=0;
                while ( $j<$jml-$i) {
                    echo "<img src='data:image/jpeg;base64,".$imageData."' style='width:15px;height:15px;'>";
                    $j++;
                }
                $i++;
                echo " <br> ";
            }
        }
    ?> 
</body>
</html>