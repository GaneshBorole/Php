<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Hello";
    echo "<br>";
    //data tupes

    //1.String
    $var="This is a string";
    echo var_dump($var);
    echo "<br>";
    // 2.Integer
    $var=65;
    echo var_dump($var);
    echo "<br>";
    // 3.Float
     $var=45.30;
    echo var_dump($var);
    echo "<br>";
    // 4.Boolean
     $var=true;
    echo var_dump($var);
    echo "<br>";
    // 5.Array
    // 6.object
    define('pi',3.14);
    echo pi;
    ?>
</body>
</html>