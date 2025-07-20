<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php tutorial</title>
</head>
<body>
    <?php
    $a=0;
    while ($a <= 10) {
     echo "<br> The value of a is : ";
     echo $a;
     $a++;
    }

    $a=0;
     $languages=array("python","c++","php","NodeJs");
    //iteration of array in php
    while ($a < count($languages)) {
       echo "<br> The value of a is :";
       echo $languages[$a];
       $a++;
    }
// do while

     $a=20;
     $languages=array("python","c++","php","NodeJs");
    do {
      echo "<br> The value of a is : ";
      echo $a;
      $a++;
    } while ($a < 10);   

    //For loop

    for ($a=0; $a < 10; $a++) { 
    echo "<br> The value of a form  for loop  is : ";
     echo $a;
    }
    $languages=array("python","c++","php","NodeJs");
    foreach($languages as $value){
        echo "<br> the value from foreach is :";
        echo $value;


    }

    ?>
    
</body>
</html>