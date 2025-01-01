<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice001</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
<div class="container mx-auto mt-3 text-center">
    <h1>Swap the values of two variables</h1>
    <h3>
    <?php
    $a=10;
    $b=50;
    
    echo "a = $a<br>";
    echo "b = $b<br>";
    
    $tmp=$a;
    $a=$b;
    $b=$tmp;
    
    echo "交換後<br>";
    
    echo "a = $a<br>";
    echo "b = $b<br>";
    ?>
    </h3>
</div>

<script src="./js/bootstrap.min.js"></script>
<script src="./js/jquery-3.7.1.min.js"></script>
</body>
</html>