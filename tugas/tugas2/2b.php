<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2b</title>
</head>
<body>
    <?php for($a=1; $a<=10; $a++):?>
        <?php for($b=1; $b < $a; $b++): ?>
            <?= $b ?>
        <?php endfor?>
        <?= $a . "<br>" ?>
    <?php endfor?>
</body>
</html>