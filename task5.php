<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <p id="demo">5. Write a program that will execute the bubble sort algorithm for the given one-dimensional array.</p>


<?php
// 5. Write a program that will execute the bubble sort algorithm for the given one-dimensional
// array.
function bSort($arr){
    for($j = 0; $j < count($arr); $j++){
        for($i = 0; $i < count($arr)-1; $i++){
            if($arr[$i] >= $arr[$i+1]){
                $p = $arr[$i+1];
                $arr[$i+1] = $arr[$i];
                $arr[$i] = $p;
            }
        }
        
    }
    for($j = 0; $j < count($arr); $j++) echo $arr[$j] . " ";
}
$arr = array(5, 1, 4, 89, 17, 2, 46,57568,457,-4);
bSort($arr);
?>

</body>
</html>
