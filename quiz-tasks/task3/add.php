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
        <a href="index.php" method="get">
            <button>Cancel</button>
        <br>
        </a>
        <center><!-- 
I did not bootstrap or other styling tools because I thought it will make me late it will take long time. anyway it is optional -->
        <form action="index.php" method="get"><!-- //I did not put required in the end of each input because then I would have to fill out every input during testing my code, this way it is easier :) -->
            <label>Name:</label>
            <input type="text" name="name" placeholder="Name" />
            <br>
            <br>
            <label>Surname:</label>
            <input type="text" name="surname" placeholder="Surname" />
            <br>
            <br>
            <label>Gender:</label>
            <input type="radio" name="m"/>Male
            <input type="radio" name="f"/>Female
            <br>
            <br>
            <label>Address:</label>
            <input type="text" name="address" placeholder="Address" />
            <br>
            <br>            
            <label>Age:</label>
            <input type="number" name="age" placeholder="Age" min="0" max="100" /><!-- age min 0 max 100 -->
            <br>
            <br>
            <label>Email:</label>
            <input type="email" name="email" required="" placeholder="Email" />
            <br>
            <br>
            <label>Employed:</label>
            <input type="checkbox" name="checkbox" required="" />
            <br>
            <br>
            <label>Description:</label>
            <textarea name="description" required="" placeholder="Description"></textarea>            
            <br>
            <br>
            <button type="submit" name="add">Add</button>
        </form>

        </center>
    </body>
</html>
