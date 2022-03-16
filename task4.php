
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

// 4. Write a program which will print all prime numbers in the range of 1 to 100.

function prime($num){
    if ($num == 1) return 0;
    for ($i = 2; $i <= sqrt($num); $i++){
        if ($num % $i == 0) return 0;  
    }
    return 1;
}

    for($num = 1; $num <= 100; $num++) {
	$tf = prime($num);
	if ($tf == 1) {
		echo $num." ";
	}
}	
?>

</body>
</html>