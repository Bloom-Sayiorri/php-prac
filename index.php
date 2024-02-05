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
// foreach($capitals as $key => $value){
//     echo "Country: $key<br>,
//      Capital: $value <br>";
// }
?>