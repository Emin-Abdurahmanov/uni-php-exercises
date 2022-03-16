<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <p id="demo"></p>


<?php
//1. Create a script to construct the following pattern, using nested for loop:
for ($i = 0; $i < 6; $i++){
    for($j = 0; $j < 6; $j++){
        if($i>=$j) echo "* ";
        else echo "&nbsp ";
    }
    echo "<br>";
}
for ($i = 0; $i < 6; $i++){
    for($j = 0; $j < 6; $j++){
        if($i + $j < 6) echo "* ";
        else echo "&nbsp ";
    }
    echo "<br>";
}
/*   x
     xx
     xxx
     xxxx
     xxxxx
     xxxxxx
     xxxxx
     xxxx
     xxx
     xx
     x
*/
for ($i = 0; $i < 6 ; $i++){
    for($j = 0; $j < 6; $j++){
        if($j >= $i) echo "* ";
        else echo "&nbsp ";
    }
    echo "<br>";
}
for ($i = 0; $i < 6; $i++){
    for($j = 0; $j < 6; $j++){
        if($i + $j >= 5) echo "* ";
        else echo "&nbsp ";
    }
    echo "<br>";
}
/*      
     xxxxxx
      xxxxx
       xxxx
        xxx
         xx
          x
          x
         xx
        xxx
       xxxx
      xxxxx
     xxxxxx

*/
?>

</body>
</html>
