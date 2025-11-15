<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop</title>
</head>
<body>
    

<?php

for($i = 0; $i < 10; $i++)
{
    echo $i. "<br>";
}


$num = 0;
while($num < 10)
{
    echo $num. "<br>";
    $num++ ;
}


$test = 10;
do{
    echo $test. "<br>";
    $test++ ;
}
while($test<10);



$family = ["Mom","Dad","sister","brother"];
foreach($family as $p){
    echo $p. "<br>";
}



$family2 = array("Mom"=>"Mona", "Dad"=>"Hassan", "sister"=>"Mai", "brother"=>"Ibrahim,Mohammed");
foreach($family2 as $p => $name){
    echo "My ". $p . " is ". $name .  "<br>";
}


?>
</body>
</html>