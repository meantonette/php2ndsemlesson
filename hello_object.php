<!-- make use of that class by creating an object (or a class instance). -->
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Hello, World!</title>
<link rel="stylesheet"
href="style.css">
</head>
<body>
<!-- Now the variable $object exists and is of
type ClassName (instead of type string or array). More
technically put, $object is an instance of ClassName.
• To call the methods of the class, you use this syntax:
• $object->methodName();
• (The -> can be called the object operator.)
• If a method takes arguments, you provide those within
parentheses, as in any function call:
• $object->methodName('value', 32, true);
• To access an object’s properties, use
• $object->propertyName;
• Note that you would not use the property variable’s dollar sign,
which is a common cause of parse errors:
• $object->$propertyName; // Error!
• Once you’ve finished with an object, you can delete it as you would
any variable:
• unset($object); -->

<?php # Script 4.2 - hello_object.phpmed hello_object.php

require('HelloWorld.php');

// Create the object:
$obj = new HelloWorld();
// • Invoke the sayHello() method:
$obj->sayHello();
// • Say hello in a few more languages:
$obj->sayHello('Italian');
$obj->sayHello('Dutch');
$obj->sayHello('French');

// Delete the object and complete the page:
unset($obj);
// You don’t technically have to delete the object—it will be deleted as soon as the script
// ends. Still, I think it’s better programming form to tidy up like this.
?>
</body>
</html>

