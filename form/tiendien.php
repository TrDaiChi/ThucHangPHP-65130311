<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "tinhtiendien.php" method= "post">
        Tên chủ hộ: <input type= "text" name= "ten">
        <br><br>
        Chỉ số cũ: <input type= "text" name= "csc">
        <br><br>
        Chỉ số mới: <input type= "text" name= "csm">
        <br><br>
        Đơn giá: <input type= "text" name= "dg" value="2000" readonly>
        <br><br>
        Số tiền thanh toán: <input type= "text" name= "tien" readonly>
        <br><br>
        <input type= "submit" value="tinh">
        
    </form>
</body>
</html>