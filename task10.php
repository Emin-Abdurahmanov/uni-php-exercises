<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <p id="demo">10. Write a program that will implement the matrix multiplication algorithm (remember about
        validation).
    </p>


<?php
    function matrixMultiple($arr, $arr2){
        $equal = 0;
        $multipleArray = array (array(0));
        $a1 = sizeof($arr);//5
        $a2 = sizeof($arr2);//3
        $b1 = count($arr[0]);//3
        $b2 = count($arr2[0]);//4
        for($j = 0; $j < $a1; $j++){
            for($i = 0; $i < $b2; $i++){
                $multipleArray[$j][$i] = 0;
            }   
        }
        // var_dump($reverseArray);
        if($a2 == $b1){ 
            $equal = 1;
        }
        if($equal){
            for($j = 0; $j < $a1; $j++){
                for($i = 0; $i < $b1; $i++){
                    echo "<span class = 'matrix'>&nbsp".$arr[$j][$i]."&nbsp</span>";
                }
                echo "<br>";     
            }
            echo "<br> x <br>"; 
            for($j = 0; $j < $a2; $j++){
                for($i = 0; $i < $b2; $i++){
                    echo "<span class = 'matrix'>&nbsp".$arr2[$j][$i]."&nbsp</span>";
                }
                echo "<br>";     
            } 
            echo "<br> = <br>"; 
            for($j = 0; $j < $a1; $j++){
                for($i = 0; $i < $b2; $i++){
                    for($k = 0; $k < $a2; $k++){
                        $multipleArray[$j][$i] += $arr[$j][$k] * $arr2[$k][$i];
                    }
                    echo "<span class = 'matrix'>&nbsp".$multipleArray[$j][$i]."&nbsp</span>";
                }
                echo "<br>";     
            }           
        }
        else echo "Matrice dont match up";
    }
    $arr = array (
        array(1,3,8),
        array(2,5,3),
        array(3,3,2),
        array(4,7,2),
        array(6,3,1),
    );
    $arr2 = array (
        array(3,2,1,2),
        array(2,5,4,4),
        array(3,5,2,3)
    );
    matrixMultiple($arr, $arr2);
?>
<style>
    .matrix{
        border: 1px solid;
        margin-left: 20px;
    }
</style>

</body>
</html>
