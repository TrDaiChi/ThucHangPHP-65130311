<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            color:blue;
            text-align: center;
        }
        label{
            color:blue;
        }
        input[type="text"]{
            width: 100px;
            margin: 3px;
        }
    </style>
</head>
<body>
    <h1>PHÉP TÍNH TRÊN 2 SỐ</h1>
    <?php
    $so1 = $_POST["so1"];
    $so2 = $_POST["so2"];
    $pheptinh = $_POST["pheptinh"];
    $ketqua = 0;
    function kiemTraDuLieu($so1, $so2, $pheptinh)
    {
        if (!is_numeric($so1) || !is_numeric($so2)) {
            return false;
        }
        if ($pheptinh == "chia" && $so2 == 0) {
            return false;
        }

        return true;
    }
    if (!kiemTraDuLieu($so1, $so2, $pheptinh)) 
    {
        echo "<script>";
        echo "window.history.back();";
        echo "</script>";
    exit;
    }
    $so1 = (float)$so1;
    $so2 = (float)$so2;

    if ($pheptinh == "cong") {
        $ketqua = $so1 + $so2;
    }
    elseif ($pheptinh == "tru") {
        $ketqua = $so1 - $so2;
    }
    elseif ($pheptinh == "nhan") {
        $ketqua = $so1 * $so2;
    }
    elseif ($pheptinh == "chia") {
        $ketqua = $so1 / $so2;
    }
    ?>
    <label>Phép tính:</label>
    <?php
    if ($pheptinh == "cong") {
        echo "Cộng";
    }
    elseif ($pheptinh == "tru") {
        echo "Trừ";
    }
    elseif ($pheptinh == "nhan") {
        echo "Nhân";
    }
    else {
        echo "Chia";
    }
    ?>
    <br>
    <label>Số 1:</label>
    <input type="text" value="<?php echo $so1; ?>" readonly>
    <br>
    <label>Số 2:</label>
    <input type="text" value="<?php echo $so2; ?>" readonly>
    <br>
    <label>Kết quả:</label>
    <input type="text" value="<?php echo $ketqua; ?>" readonly>
    <br>
    <a href="javascript:window.history.back(-1);">
        Quay lại trang trước
    </a>
</body>
</html>