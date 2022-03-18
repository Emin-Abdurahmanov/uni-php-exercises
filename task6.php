<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <p id="demo">
        6. Write a PHP script to calculate and display average temperature, five lowest and highest
        temperatures.
        <br>
        Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73,
        72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73
    </p>


<?php
// 6. Write a PHP script to calculate and display average temperature, five lowest and highest
// temperatures.
// Recorded temperatures : 78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73,
// 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

function temp($arr, $num){
    for($j = 0; $j < count($arr); $j++){
        $avg = array_sum($arr) /count($arr);  
    }
    echo "Average of the all temperatures is: ". $avg;
    echo "<br> $num lowest temperatures: ";
    sort($arr);
    for($j = 0; $j < $num; $j++) echo $arr[$j]. " ";
    echo "<br> $num highest temperatures: ";
    rsort($arr);
    for($j = 0; $j < $num; $j++) echo $arr[$j]. " ";
}
$arr = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73,
 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
temp($arr, 5);
?>

</body>
</html>
