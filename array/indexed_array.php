<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Array</title>
</head>

<body>

    <?php

    // Indexed Array

    $fruits = ["banana", "orange", "apple"];

    //Change the value of an array item
    $fruits[0] = "kiwi"; 

    // Adding a value in the end of the array
    $fruits[] = "cherry"; 
    array_push($fruits,"avocado");

    // Counts all elements in an array, or something in an object
    echo count($fruits);
    echo "<br>";

    // The unset() function does not re-index the array.
    // if you remove an element at index 1, the other elements (e.g., at index 0, 2, 3, etc.) will keep their original indices, leading to a "gap" in the sequence of indices
    unset($fruits[1]); 

    // Remove an existing item from an array (where to start) and how many items you want to delete
    // After the deletion, the array gets reindexed automatically
    array_splice($fruits, 0, 3); 

    //echo $fruits[0];

    // Print all array items and some of its information
    var_dump($fruits);
    echo "<br>";
    print_r($fruits);

    // Finds whether a variable is an array
    echo is_array($fruits);
    

    ?>

</body>

</html>