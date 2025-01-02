<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice002</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
<div class="container mx-auto mt-3 text-center">
    <h1>判斷成績及格學生</h1>
    <h3>
    <!-- 給定一個成績數字，判斷是否及格(60)分 -->
    <?php
    $score=60;
    if ($score>=60) {
        echo "學生的成績為：".$score."分，及格";
    }else{
        echo "學生的成績為：".$score."分，不及格";
    }
    ?>
    <h1 class="mt-5">分配成績等級與評語</h1>
    <h3>
    <?php
    if(0 <= $score && $score <= 59){
        echo "學生成績等級為：E，急需改進";
    }else if(60 <= $score && $score <= 69){
        echo "學生成績等級為：D，有待加強";
    }else if(70 <= $score && $score <= 79){
        echo "學生成績等級為：C，表現尚可";
    }else if(80 <= $score && $score <= 89){
        echo "學生成績等級為：B，表現優良";
    }else if(90 <= $score && $score <= 100){
        echo "學生成績等級為：A，卓越非凡";
    }
    ?>
    </h3>
</div>

<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery-3.7.1.min.js"></script>
</body>
</html>