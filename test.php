<?php
session_start();
session_regenerate_id();
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
	<form action="test2.php" method="post">
		<label>Name: </label>
		<input type="text" name="name" required />
		<br>
		<label>Surname:</label>
		<input type="text" name="surname"/>
		<br>
		<label>Email:</label>
		<input type="email" name="email"/>
		<br>
		<label>Phone number:</label>
		<input type="phone" name="phone" value=""/>
		<br>
		<label>Adress:</label>
		<input type="Adress" name="address" value=""/>
		<br>
		<label>City:</label>
		<input type="text" name="city" value=""/>
		<br>
		<label>Postal code:</label>
		<input type="text" name="postal" value=""/>
		<br>
		<button type="submit" name="submit">Submit data</button>
	</form>

</body>
</html>
