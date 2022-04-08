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

$editRow = array();

if (filter_has_var(INPUT_GET, "edit")) {
    $id = filter_input(INPUT_GET, "edit-id");

    for ($i = 0; $i < count($records); $i++) {
        if ($records[$i][0] == $id) {
            $editRow = $records[$i];
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
        <a href="index.php" method="get">
            <button>Cancel</button>
        </a>

        <form action="index.php" method="get">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $editRow[1]; ?>" />
            <br>

            <label>Surname:</label>
            <input type="text" name="surname" value="<?php echo $editRow[2]; ?>"/>
            <br>

            <label>Gender:</label>
            <input type="radio" name="m" <?php if ($editRow[3] =="male") {
                echo "checked";//if the record says male then male radio should be checked
            }  ?>/>Male
            <input type="radio" name="f"<?php if ($editRow[3] =="female") {
                echo "checked";//if the record says female then female radio should be checked
            }  ?> />FeMale
            <br>

            <label>Address:</label>
            <input type="text" name="address" value="<?php echo $editRow[4]; ?>" />
            <br>

            <label>Age:</label>
            <input type="number" name="age" value="<?php echo $editRow[5]; ?>" min = "0" max = "100"/>
            <br>

            <label>Employed:</label>
            <input type="checkbox" name="checkbox" checked="" required="" />
            <br>
            <br>
            <label>Email:</label>
            <input type="text" name="city" value="<?php echo $editRow[6]; ?>" required="" />
            <br>

            <label>Description:</label>
            <textarea name="description" required="" placeholder="Description"><?php echo $editRow[7]; ?></textarea> 

            <br>
            <input type="hidden" name="edit-id" value="<?php echo $editRow[0]; ?>" />
            <button type="submit" name="edit">Save</button>
        </form>
    </body>
</html>
