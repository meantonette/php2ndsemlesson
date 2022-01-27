<!-- Creating Destructors -->

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Constructors and Destructors</title><link rel="stylesheet" href="style.css">
</head>
<body>
<?php # Script 4.7 - demo.php
// • 2. Begin defining the class:
class Demo {
// • Create the constructor:
function __construct() {
echo '<p>In the constructor.</p>';
}
function __destruct() {
echo '<p>In the destructor.</p>';
}
}
// • Define a simple function that also creates an object:
function test() {
echo '<p>In the function. Creating a new object...</p>';
$f = new Demo();
echo '<p>About to leave the function.</p>';
}

// • Create an object of class Demo:
echo '<p>Creating a new object...</p>';
$o = new Demo();

// Call the test() function:

echo '<p>Calling the function...</p>';
test();
// • Delete the $o object:
echo '<p>About to delete the object...</p>';
unset($o);
// • Once this object is deleted, its destructor is invoked.
// • Complete the page:
echo '<p>End of the script.</p>';
?>
</body>
</html>