<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $x = rand(-100,100);
        echo "N = $x<br>";
        if($x > 0){
            echo "Các ước số: ";
            for($i = 1;$i <= $x; $i++){
                if($x % $i == 0)
                    echo "$i ";
            }
            $laSoNguyenTo = true;
            if ($x < 2) {
                $laSoNguyenTo = false;
            } else {
                for ($i = 2; $i < $x; $i++) {
                    if ($x % $i == 0) {
                        $laSoNguyenTo = false;
                        break;
                    }
                }
            }
            if ($laSoNguyenTo) {
                echo "<br>" . "$x là số nguyên tố";
            } else {
                echo "<br>" . "$x không phải là số nguyên tố";
            }
            $sum = 0;
            for ($i = 2; $i < $x; $i++) {
                $laSoNguyenTo = true;
                for ($j = 2; $j < $i; $j++) {
                    if ($i % $j == 0) {
                        $laSoNguyenTo = false;
                        break;
                    }
                }
                if ($laSoNguyenTo) {
                    $sum += $i;
                }
            }
            echo "<br>" . "Tổng các số nguyên tố < $x = " . $sum;
            $can = sqrt($x); 
            if ($can == floor($can)){
                echo "<br>$x là số chính phương"; 
            }
            else { 
                echo "<br>$x không phải là số chính phương"; 
            }
            
        }
        else echo "Không phải số dương";
    ?>
</body>
</html>