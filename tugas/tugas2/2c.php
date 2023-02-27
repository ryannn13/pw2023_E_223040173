<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2c</title>
    <style>
        .box{
            width: 50px;
            height: 50px;
            background-color: crimson;
            border: 2px solid black;
            text-align: center;
            line-height: 50px;
        }
        .angka{
            display: flex;
        }
    </style>
</head>
<body>
    <?php for($a=11; $a>0; $a--):?>
        <div class="angka">
            <?php for($b=1; $b < $a; $b++): ?>
                <div class="box"><?= $b ?></div>
            <?php endfor?>
        </div>
    <?php endfor?>
</body>
</html>