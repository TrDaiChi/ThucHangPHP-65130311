<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $toan = $_POST["toan"];
    $ly = $_POST["ly"];
    $hoa = $_POST["hoa"];
    $diemchuan = $_POST["diemchuan"];
    $diem = ($toan + $ly + $hoa);
    if($diem >= 20 && $toan >0 && $ly >0 && $hoa >0){
        $kq = "đậu";
    }else $kq = "rớt";

    echo "Toán: " . $toan . "<br>";
    echo "Lý: " . $ly . "<br>";
    echo "Hóa: " . $hoa . "<br>";
    echo "Điểm chuẩn: " . $diemchuan . "<br>";
    echo "Tổng điểm: " . $diem . "<br>";
    echo "Kết quả: " . $kq . "<br>";
    ?>
</body>
</html>