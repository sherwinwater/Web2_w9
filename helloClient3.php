<!DOCTYPE html>
<?php
/* Example Hello World program with Parameters. This one handles the error
 * case more gracefully and the processing and output are separated.
 */
 
// THE PROCESSING

if (isset($_GET["lastName"])) {
	$msg = "<p>Hello, Mr. {$_GET["lastName"]}. ";
	if (isset($_GET["firstName"]))
		$msg = $msg . "May I call you {$_GET["firstName"]}?</p>";
	else
		$msg = $msg . "</p>";
} else
	$msg = "<p>Hello. You forgot to specify your name.</p>";

// THE OUTPUT
?>
<html>
    <head>
        <meta charset='UTF-8'>
        <title>Hello Client3</title>
    </head>
    <body>
        <h1>Hello Client3</h1>
        <p><?= $msg ?></p>
    </body>
</html>