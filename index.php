<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <p>Select your favourite snacks;</p>
        <input type="radio" name="food" value="Taco">Taco<br>
        <input type="radio" name="food" value="Hamburger">Hamburger<br>
        <input type="radio" name="food" value="Hotdog">Hotdog<br>
        <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php
    if(isset($_POST["submit"])) {
        $selected = $_POST["food"];
        echo $selected;
        // echo "selected sth";
    }
?>