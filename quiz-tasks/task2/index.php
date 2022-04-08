<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Task2</title>
</head>
<body>
<!-- . Write a PHP script to get an array containing all the entries of an array which have the keys that are present in another array.
Sample input :
1st array : ('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', c4 => 'Black') 2nd array : ('c2', 'c4')
Sample Output: Array ( [c2] => Green [c4] => Black )-->
 <?php
     function sequenceFinder($arr1, $arr2){
        foreach ($arr1 as $key => $value) {
            for ($i=0; $i < count($arr2); $i++) { 
                if ($key == $arr2[$i]) {
                   echo "$key => $value <br>";
                }
                
            }
        }
    }

    $arr1 = array ('c1' =>'Red', 'c2' =>'Green', 'c3' =>'White', 'c4' =>'Black');
    $arr2 = array ('c1', 'c4');
    sequenceFinder($arr1, $arr2);
  ?>

</body>
</html>


