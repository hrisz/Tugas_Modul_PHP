<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
    <h2>Latihan 1</h2>
    <?php
    $ganjil = 7;
    switch ($ganjil)
    {
        case 0: echo("0 bukan bilangan genap maupun ganjil"); break;
        case 1: echo("1 adalah bilangan ganjil"); break;
        case 2: echo("2 bukan bilangan ganjil"); break;
        case 3: echo("3 adalah bilangan ganjil"); break;
        case 4: echo("4 bukan bilangan ganjil"); break;
        case 5: echo("5 adalah bilangan ganjil"); break;
        case 6: echo("6 bukan bilangan ganjil"); break;
        case 7: echo("7 adalah bilangan ganjil"); break;
        case 8: echo("8 bukan bilangan ganjil"); break;
        case 9: echo("7 adalah bilangan ganjil"); break;
        default: echo("Masukkan angka antara 1 - 9");
    }
    ?>
</body>
</html>