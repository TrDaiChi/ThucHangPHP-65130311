<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

<?php

    $giobatdau = $_POST["giobatdau"];
    $gioketthuc = $_POST["gioketthuc"];
    if ($gioketthuc <= $giobatdau) {
        echo "Giờ kết thúc phải > Giờ bắt đầu";
    } else {
        $tien = 0;
        if ($giobatdau < 17) {
            $gio = min($gioketthuc, 17) - max($giobatdau, 10);
            if ($gio > 0) {
                $tien += $gio * 20000;
            }
        }
        if ($gioketthuc > 17) {
            $gio = $gioketthuc - max($giobatdau, 17);
            if ($gio > 0) {
                $tien += $gio * 45000;
            }
        }
        echo "Giờ bắt đầu: " . $giobatdau . "<br>";
        echo "Giờ kết thúc: " . $gioketthuc . "<br>";
        echo "Tiền thanh toán: " . $tien;

    }

?>

</body>
</html>