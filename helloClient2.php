<!DOCTYPE html>
<?php
/* Example Hello World program with Parameters. This one handles the error
 * case more gracefully
 */
?>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Hello Client2</title>
    </head>
    <body>
        <h1>Hello Client2</h1>
        <?php
        if (isset($_GET["lastName"]) && $_GET["lastName"] != NULL && $_GET["lastName"] != " ") {
            echo "<p>Hello, Mr. {$_GET["lastName"]}. ";
            if (isset($_GET["firstName"]))
                echo "May I call you {$_GET["firstName"]}?</p>";
            else
                echo "</p>";
        } else
            echo "<p>Hello. You forgot to specify your name.</p>";
            ?>
    </body>
</html>