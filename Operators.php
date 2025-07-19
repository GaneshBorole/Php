<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Arithmetic operator
    $variable1=80;
    $variable2=40;
    echo "The value of variable1 + variable 2 is :";
    echo $variable1+$variable2;
    echo "<br>";

    echo "The value of variable1 - variable 2 is : ";
    echo $variable1-$variable2;
    echo "<br>";

    echo "The value of variable1 * variable 2 is :";
    echo $variable1*$variable2;
    echo "<br>";
     
    echo "The value of variable1 / variable 2 is : ";
    echo $variable1/ $variable2;
    echo "<br>";


    // Assignment operator
    $newVar = $variable1;
    echo "The value of newvar is :";
    echo $newVar;
    echo "<br>";
    // comparison operator
    echo var_dump(1==4);
    echo "<br>";

     echo var_dump(1!=4);
    echo "<br>";

     echo var_dump(1<=4);
    echo "<br>";

     echo var_dump(1>=4);
    echo "<br>";

    //Increment/Decrement operator
   echo  $variable1++;
   echo "<br>";
    echo $variable1--;
    echo "<br>";
   echo ++$variable1;
   echo "<br>";
    echo --$variable1;
   
    // Logical operator
    $myvar=(true)and (true);
    echo var_dump($myvar);


    ?>
</body>
</html>