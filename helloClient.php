<!DOCTYPE html>
<?php
// Example Hello World program with Parameters
?>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Hello Client</title>
    </head>
    <body>
        <h1>Hello Client</h1>
        
        <p>Hello, Mr. <?= $_GET["lastName"] ?>. May I call you <?= $_GET["firstName"] ?>?</p>
    </body>
</html>