<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(228,195,195);
        margin: auto;
        padding:20px;

    }
</style>
<body>
    <div class="container">
        <h1>Lets Learn about PHP</h1>
      <p>Your Voting criteria is here </p>
        <br />
    <?php
     $age=5;
     if ($age > 18) {
        echo " you can vote";
     }
     else if($age== 7){
        echo "You are 7 years Old";
     }else{
        echo "you can't vote";
     }
     //array in php
     echo"<br>";
     $languages=array("python","c++","php","Node");
     echo $languages[0];
    ?>
    </div>
</body>
</html>