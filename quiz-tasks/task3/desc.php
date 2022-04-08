<?php
session_start();
if (isset($_SESSION["records"])) {
    $records = $_SESSION["records"];
} else {
    $records = array();
}

$editRow = array();

if (filter_has_var(INPUT_GET, "submitMore")) {
    $content = filter_input(INPUT_GET, "more");//getting the description content
}
?>
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

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <center>
        <a href="index.php" method="get">
            <button>Back</button><!-- Go Back button -->
        </a>  
        <h2>Description: </h2>
        </center>
        <p>

            <?php echo $content; ?><!-- displaying the conent -->
        </p>
    </body>
</html>
