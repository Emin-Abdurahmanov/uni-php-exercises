<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <p id="demo">8. Write a program which will create one dimensional array from two given arrays (don’t use
 predefined function, only for loops).</p>


<?php
// 8. Write a program which will create one dimensional array from two given arrays (don’t use
// predefined function, only for loops).

$arr = array(1,2,3,4,5,6,7,8,9);
$arr2 = array("a","b","c","d","e","f","g","h","i");
$result = array_merge($arr, $arr2);
    for($j = 0; $j < count($result); $j++) echo $result[$j] . " ";
?>

</body>
</html>
