<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice003</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
<div class="container mx-auto mt-3 text-center">
    <h1>使用for迴圈來產生以下的數列</h1>
    <!-- 1,3,5,7,9……n -->
    <!-- 10,20,30,40,50,60……n -->
    <!-- 3,5,7,11,13,17……97 -->
    <h3>
    <?php
    for ($i=1; $i < 100 ; $i+=2) { 
      echo "$i, ";  
    }
    echo "<br><br><br>";
    for ($i=10; $i < 100 ; $i+=10) { 
        echo "$i, ";  
    }
    echo "<br><br><br>";    
    echo "2, "; 
    for ($i = 3; $i <= 1000; $i += 2) { 
        $isPrimeNum = true; 

        for ($j = 2; $j <= sqrt($i); $j++) { // 從2到 i 的平方根檢查
            if ($i % $j == 0) {
                $isPrimeNum = false; // 如果能被整除，就不是質數
                break;
            }
        }

        if ($isPrimeNum) {
            echo "$i, ";
        }
    }
    ?>

    </h3>
</div>

<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery-3.7.1.min.js"></script>
</body>
</html>