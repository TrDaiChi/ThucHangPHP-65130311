<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $chieudai = $_POST["chieudai"];
    $chieurong = $_POST["chieurong"];
    $dt = $chieudai * $chieurong;

echo "Chiều dài: " . $chieudai . "<br>";
echo "Chiều rộng: " . $chieurong . "<br>";
echo "Diện tích: " . $dt;
    ?>
</body>
</html>