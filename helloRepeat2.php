<!DOCTYPE html>
<?php
/* Example Hello World program with a numeric parameter. This file
 * demonstrates interleaving of HTML and PHP. YUCK!
 */
?>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Hello Client Repeat2</title>
    </head>
    <body>
        <?php
        if (isset($_GET['numHellos']))
            $n = $_GET['numHellos'];
        else
            $n = 1;
        for ($i = 0; $i < $n; $i++) { 
            ?>
            <p>Repeat2 - Hello, World!</p>
            <?php
        }
        ?>
    </body>
</html>