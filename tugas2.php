<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
</head>
<body>
    <h2>Latihan 2</h2>
    <?php
    function akurasi($a,$b,$c,$d)
    {
        $equal=$a+$b+$c+$d;
        return $equal;
    }
    echo ("Akurasi bilangan genap dari 0 s.d 6 adalah ".akurasi(0,2,4,6));
    ?>
</body>
</html>