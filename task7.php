<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <p id="demo">7. Write a program which will remove element on given position from given one dimensional
array (remember about indexing items).</p>


<?php
// 7. Write a program which will remove element on given position from given one dimensional
// array (remember about indexing items).
function remove($arr, $position){
    echo "Initial Arrray: <br>";
    for($j = 0; $j < count($arr); $j++) echo $arr[$j] . " ";
    array_splice($arr, $position, 1);
    echo "<br><br>Array after removing an element: <br>";
    for($j = 0; $j < count($arr); $j++) echo $arr[$j] . " ";
}
$arr = array(1,2,3,4,5,6,7,8,9);
remove( $arr, 5);
?>

</body>
</html>
