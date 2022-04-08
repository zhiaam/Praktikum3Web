<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301</title>
</head>
<body>
    <form action="" method="POST">
        Jumlah peserta: <input type="text" name="jumlah"><br>
        <button type="submit" name="submit">Cetak</button>
    </form> 

    <?php
        if (isset($_POST['submit'])){
            $j = $_POST["jumlah"];
            $n = 1;

            while($n <= $j) {
                if($n % 2 == 0){
                    echo "<h2 style='color:green;'>Peserta ke-$n</h2>";
                }
                else{
                    echo "<h2 style='color:red;'>Peserta ke-$n</h2>";
                }
                $n++;
            }
        }
    ?> 
</body>
</html>