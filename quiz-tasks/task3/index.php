<!-- 3. Write a PHP program that will perform the CRUD operations (create, read, edit and delete) of the following records:
- name (input type text),
- name (input type text),
- woman man (input type radio),
- address (input type text),
- age (select with range from 0 to 100),
- e-mail adress (input type email),
- employed (input type checkbox),
- description (textarea).
Store the data in the chosen structures in the session.
The description field should not be displayed in the table element, but in a new tab when the button is clicked (separate button for showing description).
Additionally, you can use the Bootstrap framework and base the application logic on classes (it is not required but only optional). -->
<?php
session_start();

if (isset($_SESSION["records"])) {
    $records = $_SESSION["records"];
} else {
    $records = array();
}

if (filter_has_var(INPUT_GET, "delete")) {
    $id = filter_input(INPUT_GET, "delete-id");

    for ($i = 0; $i < count($records); $i++) {
        if ($records[$i][0] == $id) {
            unset($records[$i]);
            $records = array_values($records);
            $_SESSION["records"] = $records;
        }
    }
} else if (filter_has_var(INPUT_GET, "add")) {
    $item = array();

    $item[] = uniqid();
    $item[] = filter_input(INPUT_GET, "name");
    $item[] = filter_input(INPUT_GET, "surname");
    if (filter_input(INPUT_GET, "m")== true) {//check if gender is male if it is then update records to male else to female
        $item[] = "male";
    }
    else $item[] = "female";
    $item[] = filter_input(INPUT_GET, "address");
    $item[] = filter_input(INPUT_GET, "age");
    $item[] = filter_input(INPUT_GET, "email");
    $item[] = filter_input(INPUT_GET, "description");

    $records[] = $item;
    $_SESSION["records"] = $records;
} else if (filter_has_var(INPUT_GET, "edit")) {
    $id = filter_input(INPUT_GET, "edit-id");

    for ($i = 0; $i < count($records); $i++) {
        if ($records[$i][0] == $id) {
            $records[$i][1] = filter_input(INPUT_GET, "name");
            $records[$i][2] = filter_input(INPUT_GET, "surname");
            if (filter_input(INPUT_GET, "m")== true) {//check if gender is male if it is then update records to male else to female
                $records[$i][3] = "male";
            }
            else $records[$i][3] = "female";
            $records[$i][4] = filter_input(INPUT_GET, "address");
            $records[$i][5] = filter_input(INPUT_GET, "age");
            $records[$i][6] = filter_input(INPUT_GET, "email");
            $records[$i][7] = filter_input(INPUT_GET, "description");

            $_SESSION["records"] = $records;
        }
    }
}
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="add.php">
            <button>Add</button>
        </a>

        <table>
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Age</th>
                <th>Email</th>
                <th>Description</th>
            </tr>
            <?php
            foreach ($records as $item) {
                ?>
                <tr>
                    <td><?php echo $item[1]; ?></td>
                    <td><?php echo $item[2]; ?></td>
                    <td><?php echo $item[3]; ?></td>
                    <td><?php echo $item[4]; ?></td>
                    <td><?php echo $item[5]; ?></td>
                    <td><?php echo $item[6]; ?></td>
                    <td>
                    <form action="desc.php" method="get"><!-- //sending the description content to new page  -->
                            <input type="hidden" name="more" value="<?php echo $item[7]; ?>" />
                            <button type="submit" name="submitMore">More</button>
                        </form>
                    </td>
                    <td>
                        <form action="edit.php" method="get">
                            <input type="hidden" name="edit-id" value="<?php echo $item[0]; ?>" />
                            <button type="submit" name="edit">Edit</button>
                        </form>
                    </td>
                    <td>
                        <form action="index.php" method="get">
                            <input type="hidden" name="delete-id" value="<?php echo $item[0]; ?>" />
                            <button type="submit" name="delete">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>
        <style type="text/css">
            table tr td{
                border: solid 1px ;
            }
        </style>
        
    </body>
</html>
