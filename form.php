<!DOCTYPE html>
<?php
// THE PROCESSING

if (isset($_GET["activity"])) {
   for ($x=0; $x<count($_GET["activity"]); $x++) {
       echo "{$_GET["activity"][$x]}<br>";
   }
}

// THE OUTPUT
?>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Hello Client</title>
    </head>
    <body>
        <h1>Hello Client</h1>
    </body>
</html>