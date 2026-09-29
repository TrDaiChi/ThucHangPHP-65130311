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
    <form action="kqpheptinh.php" method="post">
        <p>Chọn phép tính:</p>
        <input type="radio" name="pheptinh" value="cong" checked>Cộng
        <input type="radio" name="pheptinh" value="tru" checked>Trừ
        <input type="radio" name="pheptinh" value="nhan" checked>Nhân
        <input type="radio" name="pheptinh" value="chia" checked>Chia
        <br>
        <p>Số thứ nhất:</p>
        <input type="text" name="so1">
        <br>
        <p>Số thứ hai:</p>
        <input type="text" name="so2">
        <br>
        <input type="submit" name="tính">
    </form>
</body>
</html>