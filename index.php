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
    <form action="includes/formhandler.php" method="post">
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
        <button type="submit">submite</button>
        
    </form> 
</body>

</html>