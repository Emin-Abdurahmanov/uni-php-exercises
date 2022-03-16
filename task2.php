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
//2. Write a program which will give you all of the combinations of 3 digits, printed in a comma
// delimited format.
for ($i = 0; $i < 10; $i++){
    for($j = 0; $j < 10; $j++){
        for($k = 0; $k < 10; $k++){
            echo "$i". "$j"."$k"."<br>";
        }
    }
}
?>

</body>
</html>
