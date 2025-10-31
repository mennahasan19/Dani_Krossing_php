<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <?php
    /* $name = "Mennatullah Hassan";
       echo $name." is a good girl" ; */
    
    // Super Global Variables
    /* 
    echo $_SERVER["DOCUMENT_ROOT"];
    echo "<br>";
    echo $_SERVER["PHP_SELF"];
    echo "<br>";
    echo $_SERVER["SERVER_NAME"];
    echo "<br>";
    echo $_SERVER["REQUEST_METHOD"];
    echo "<br>";
    echo $_GET["name"];
    echo "<br>";
    echo $_GET["age"]; 
    */ 
    
    ?>
<!--     <form action="includes/formhandler.php" method="post">
        <label for="fn">Firstname</label>
        <input id="fn" name="firstname" type="text">
        <br>
        <label for="ln">Lastname</label>
        <input id="ln" name="lastname" type="text">
        <br>
        <label for="fp">Favourite Pet</label>
        <select  id="fp" name="favouritepet">
            <option value="dog">dog</option>
            <option value="cat">cat</option>
            <option value="bird">bird</option>
            <option value="none" selected>none</option>
        </select>
        <br>
        <button type="submit">submit</button>
        
    </form>  -->

    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
    <label for="fn">Firstnum</label>
        <input id="fn" name="num1" type="number">
        <br>
        <label for="ln">Secondnum</label>
        <input id="ln" name="num2" type="number">
        <br>
        <label for="op">Operator</label>
        <select  id="op" name="operator">
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <br>
        <button type="submit">submit</button>
    </form>

    <?php


    if (htmlspecialchars($_SERVER["REQUEST_METHOD"] == "POST"))
    {
        $num1 = htmlspecialchars($_POST["num1"]);
        $num2 = htmlspecialchars($_POST["num2"]);
        $operator = htmlspecialchars($_POST["operator"]);

        $error = false;
    
        if (empty($num1) || empty($num2) || empty($operator))
        {
        echo"you should fill all fields";
        $error = true;
        }

        elseif (!is_numeric($num1) || !is_numeric($num2))
        {
        echo "you can only enter numeric value";
        $error = true;
        }
        

        elseif (!$error)
        {
            $value = 0;

        switch($operator)
        {
            
            case "add" :
                $value = $num1 + $num2;
                break;
            case "subtract" :
                $value = $num1 - $num2;
                break;
            case "multiply" :
                $value = $num1 * $num2;
                break;
            case "divide" :
                $value = $num1 / $num2;
                break;
            default:
                "something went wrong" ;               

        }
        echo $value;
    }
    
    }
    


    ?>

</body>

</html>