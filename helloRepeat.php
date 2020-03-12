<!DOCTYPE html>
<?php
// Example Hello World program with a numeric parameter
?>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Hello Client Repeat</title>
    </head>
    <body>
        <?php
        if (isset($_GET['numHellos']))
            $n = $_GET['numHellos'];
        else
            $n = 1;
        for ($i = 0; $i < $n; $i++) 
            echo "<p> Repeat - Hello, World!</p>";
        ?>
    </body>
</html>