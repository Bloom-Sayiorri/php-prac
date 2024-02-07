<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="index.php" method="post">
            <p>Input your country to see your capital city:</p>
            <input type="text" name="country" />
            <input type="submit" name="submit" value="submit">
            <br>
            <input type="checkbox" name="flavors"/>Mustard<br>
            <input type="checkbox" name="flavors"/>Honey<br>
            <input type="checkbox" name="flavors"/>Ketchup<br>
            <input type="button" name="confirm" value="Confirm"/>
            <br>
            <input type="radio" name="food" value="Taco"/>
            <input type="radio" name="food" value="Hotdog"/>
            <input type="radio" name="food" value="hamburger"/>
            <input type="button" name="submit" value="Submit"/>
        </form>
    </body>
</html>

<?php
    $capitals = [
        "USA" => "Washington D.C",
        "Kenya" => "Nairobi",
        "Japan" => "Tokyo",
        "India" => "New Delhi"
    ];

    $country = $capitals[$_POST["country"]];
    echo $country;

    $flavor = $_POST['flavors'];
    $confirm = $_POST["confirm"];
    // if(isset())
?>