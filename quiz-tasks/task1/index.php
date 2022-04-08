<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Task1</title>
</head>
<body>
	<form action="" method="get">
            <label>Numbers Sequence:</label>
            <input type="number" name="num" required="" />
            <br>
            <br>
            <button type="submit" name="find">Find Out</button>
        </form>
<!-- /*
1. Write a PHP program to check whether the sequence of numbers 1, 2, 3 appears in a given array of integers somewhere.
Sample Input: {1,1,2,3,1} {1,1,2,4,1} {1,1,2,1,2,3}
Sample Output: bool(true) bool(false) bool(true)
 */ -->
 <?php
	 function sequenceFinder($arr, $len){
	 	for ($i=0; $i < $len ; $i++) { 
	 		if($arr[$i] == 1){
	 			if ($arr[$i+1] == 2) {
	 				if ($arr[$i+2] == 3) {
	 				 	return "Your array (" . $arr .") contains the sequence of 1,2,3";
	 				}
	 			}
		 	}
		 	else return "Your array (" .$arr .") doesnt have 1,2,3 sequence in it.";
	 	}
	}
 
 if (filter_has_var(INPUT_GET, "find")) {
	    $seq = filter_input(INPUT_GET, "num");
	    $stri = (string)$seq;
	    $len=strlen($seq);
	    echo sequenceFinder($stri, $len);
	}

  ?>

</body>
</html>
