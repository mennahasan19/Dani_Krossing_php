<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Built-In Function</title>
</head>
<body>
    <?php
    
    $string = "Hallo world!";

    echo strlen($string);
    echo "<br>".strpos($string , "w");   
    echo "<br>". str_replace("world", "Menna", $string);
    echo "<br>". strtolower($string);
    echo "<br>". strtoupper($string);
    echo "<br>". substr($string, 0, 5);
    echo "<br>". substr($string, 4, -1);
    
    
    $number = -5.5;

    echo "<br>". abs($number);
    echo "<br>". round($number);
    echo "<br>". pow($number, 2);
    echo "<br>". pow(4, 2);
    echo "<br>". sqrt(16);
    echo "<br>". rand(1, 50);

    echo "<br>". date("Y-m-d H:i:s");

    


    
    ?>
</body>
</html>