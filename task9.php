<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <p id="demo">9. Write a program that will implement the matrix addition algorithm (remember about
        validation).
    </p>


<?php
function matrixSum($arr, $arr2){
    $equal = 0;
    $sumArray = array (array(0));
    if(sizeof($arr) == sizeof($arr2)){ 
        for($i = 0; $i < sizeof($arr); $i++){
            if(count($arr[$i]) == count($arr2[$i])){
                $equal = 1;
            }
            else{ 
            $equal = 0;
            echo "Matrice dont mach up";
            return 0;
            }
        }
    }
    if($equal){
        for($j = 0; $j < count($arr); $j++){
            for($i = 0; $i < count($arr[$j]); $i++){
                echo "<span class = 'matrix'>".$arr[$j][$i]." </span>";
            }
            echo "<br>";     
        }
        echo "<br> + <br>"; 
        for($j = 0; $j < count($arr); $j++){
            for($i = 0; $i < count($arr[$j]); $i++){
                echo "<span class = 'matrix'>".$arr2[$j][$i]." </span>";
            }
            echo "<br>";     
        } 
        echo "<br> = <br>"; 
        for($j = 0; $j < count($arr); $j++){
            for($i = 0; $i < count($arr[$j]); $i++){
                $sumArray[$j][$i] = $arr[$j][$i] + $arr2[$j][$i];
                echo "<span class = 'matrix'>".$sumArray[$j][$i]." </span>";
            }
            echo "<br>";     
        }           
    }
    else echo "Matrice dont mach up";
    // var_dump($sumArray);
}
    $arr = array (
        array(1,53,18,65),
        array(2,15,13,16),
        array(3,53,22,40),
        array(4,17,15,57)
      );
    $arr2 = array (
        array(3,22,18,24),
        array(2,15,13,45),
        array(3,35,28,31),
        array(4,17,15,18)
      );
    matrixSum($arr, $arr2);
?>
<style>
    .matrix{
        /* margin: 5px; */
        border: 2px solid;
        margin-left: 30px;
    }
</style>

</body>
</html>
