<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK305</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="kata">
        <button type="submit" name="submit">Submit</button>
    </form> 
    <?php
        if (isset($_POST['submit'])){
            $kata = $_POST["kata"];
            $kataori=$kata;
            $length=strlen($kata);
            $arr=str_split($kata);
            
            echo "<h1>Input:</h1>$kataori<h1>Output:</h1>";

            foreach($arr as $fr){
                echo ucfirst($fr);
                $n=1;
                while($n<$length){
                    echo lcfirst($fr);
                    $n++;
                }
            }
        }

    ?>
</body>
</html>