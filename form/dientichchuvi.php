<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $bankinh = $_POST["bankinh"];
    $dt = 3.14 * ($bankinh * $bankinh);
    $cv = 2 * 3.14 * $bankinh;

echo "Bán kính: " . $bankinh . "<br>";
echo "Diện tích: " . $dt . "<br>";
echo "Chu vi: " . $cv;
    ?>
</body>
</html>