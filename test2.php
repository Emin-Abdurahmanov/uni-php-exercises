<?php 
session_start();
?>
<?php
if (isset($_SESSION['name'])) {
    $name = $_SESSION['name'];
}
else{
    $name = [];
}
if (isset($_POST['name'])) {

$name[]  = filter_input(INPUT_GET, "name");
$_SESSION["surname"]  = filter_input(INPUT_GET, "surname");
$_SESSION["email"]  = filter_input(INPUT_GET, "email");
$_SESSION["phone"]  = filter_input(INPUT_GET, "phone");
$_SESSION["address"]  = filter_input(INPUT_GET, "address");
$_SESSION["city"]  = filter_input(INPUT_GET, "city");
$_SESSION["postal"]  = filter_input(INPUT_GET, "postal");
$_SESSION["favcolor"] = "green";

 }
$_SESSION['name'] = $name;
$surname = $_SESSION["surname"];
$phone = $_SESSION["phone"];
$email = $_SESSION["email"];
$city = $_SESSION["city"];
$address = $_SESSION["address"];
$postal = $_SESSION["postal"];
$favcolor = $_SESSION["favcolor"];

session_regenerate_id();
?>

<html>
<head>
        <meta charset="UTF-8">
        <title></title>
</head>
<body >
        <a href="test.php">
            <button>Add</button>
        </a>

        <table>
            <tbody><tr>
                <th>Name</th>
                <th>Surname</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>Postal code</th>
            </tr>
            <tr>
                <?php
                $times = 0; 
                foreach ($name as $key => $value) {

                  echo "  <td>".$name[$key]."</td>"     ;           } ?>
                    <td><?php echo $surname; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $address; ?></td>
                    <td><?php echo $city; ?></td>
                    <td><?php echo $postal; ?></td>
                    <td><?php echo $favcolor; ?></td>
                    <td>
                        <form action="edit.php" method="get">
                            <input type="hidden" name="edit-id" value="">
                            <button type="submit" name="edit">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="index.php" method="get">
                            <input type="hidden" name="delete-id" value="">
                            <button type="submit" name="delete">Delete</button>
                        </form>
                    </td>                         

                </tr>
        </tbody>
    </table>
</body>
</html>

