<?php
$str="this this ";
echo $str;
$len=strlen($str);
echo "<br>The length of this string is : ";
echo $len;
echo "<br> the number of word in this string is ".str_word_count($str)." Thank you 
<br>";
echo "<br> the reverse  string is ".strrev($str)." Thank you 
<br>";
echo "<br> the reverse  string is ".str_replace("is","at",$str)." Thank you <br>";

?>