<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Defined Function</title>
</head>
<body>
    <?php 
    
    function SayHallo()
    {
        echo "Hallo World!";
    }
    SayHallo();



    function Welcome($name)
    {
        echo "Welcome ". $name;
    }
    echo "<br>";
    Welcome("Menna");



    function sum($num1, $num2)
    {
        $total = $num1 + $num2;
        return $total;
    }
    echo "<br>";
    echo sum(2,5);



    $age = 23;

    function birthday()
    {
        echo "<br> I am going to be ". $GLOBALS["age"] . " next birthday";
    }
    birthday();



    define("PI" , 3.14);

    function math()
    {
        echo "<br> PI = ". PI;
    }
    math();




    

    
    
    
    ?>
</body>
</html>