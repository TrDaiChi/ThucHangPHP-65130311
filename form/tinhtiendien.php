<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $tenchuho = $_POST["ten"];
    $csc = $_POST["csc"];
    $csm = $_POST["csm"];
    $dg = $_POST["dg"];
    $tien = ($csm - $csc) * 2000;

    echo "Tên chủ hộ: " . $tenchuho . "<br>";
    echo "Chỉ số cũ: " . $csc . "<br>";
    echo "Chỉ số mới: " . $csm . "<br>";
    echo "Đơn giá: " . $dg . "<br>";
    echo "Số tiền: " . $tien . "<br>";
    ?>
</body>
</html>