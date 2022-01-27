<!-- to control member access -->
<!doctype html>
<html lang="en">
<head><meta charset="utf8"><title>Visibility</title><link rel="stylesheet" href="style.css"></head><body><?php # Script 5.4 - visibility.php

// •Begin declaring the Test class:

class Test {
public $public = 'public';
protected $protected = 'protected';
private $_private = 'private';

// •This class contains three attributes, one of each type.
// To make things even more obvious, the name and
// value of each attribute match its visibility.
// • As a convention, private variable names are often
// begun with an underscore. This is commonly done in
// many OOP languages, although it is not required.
// • Add a printVar() method and complete the class:

function printVar($var) {
echo "<p>In Test, \$$var: '{$this->$var}'.</p>";
}
}

// • The \$$var will end up printing a dollar sign
// followed by the value of $var (the argument).
// The $this->$var code will be evaluated as $this->public, $this->protected, 
//and $this->private so that it can access the class attributes.

// • Create a class that extends Test:
class LittleTest extends Test {
function printVar($var) {
echo "<p>In LittleTest, \$$var: '{$this->$var}'.</p>";
}
} // End of LittleTest class.

// • The LittleTest class, as an extension of Test, will inherit
// the $public and $protected attributes. It will not have
// the $_private attribute, as that variable’s visibility is
// private, meaning it cannot be inherited.
// • Create an object of each type:
$parent = new Test();
$child = new LittleTest();

// • Print the current value of the $public variable by
// calling the printVar() method:

echo '<h1>Public</h1>';
echo '<h2>Initially...</h2>';
$parent->printVar('public');
$child->printVar('public');

// • Modify the Test $public attribute and reprint:
echo '<h2>Modifying $parent->public...</h2>';
$parent->public = 'modified';
$parent->printVar('public');
$child->printVar('public');

// • Because $public has public visibility, it can be accessed
// (and therefore modified) anywhere . You should note
// that these lines only change the value of
// the $public attribute in the $parent object.
// The $child object’s $public variable still has the original
// value (because the $public attribute is represented as a
// separate entity in each object).

// • Repeat Steps 6 and 7 for the protected variable:

echo '<hr><h1>Protected</h1>';
echo '<h2>Initially...</h2>';
$parent->printVar('protected');
$child->printVar('protected');
echo '<h2>Attempting to modify $parent->protected...</h2>';
$parent->protected = 'modified';
$parent->printVar('protected');
$child->printVar('protected');

unset($parent, $child);
?>
</body>
</html>

<!-- Comment out this line:
• $parent->protected = 'modified';
• Before unsetting the objects, repeat Steps 6 and 7 for
the private attribute.
• $parent->printVar('_private');
• $child->printVar('_private');
• echo '<h2>Attempting to modify $parent-
>_private...</h2>';
• $parent->_private = 'modified';
• $parent->printVar('_private');
• $child->printVar('_private');

• Many programmers would argue that all
attributes should be protected or private, so they
are never directly accessible outside of the class.
You would then write “get” and “set” methods as
an interface for accessing them when needed.
• A method designed to return an attribute’s value
is called a getter or an accessor. A method
designed to assign a value to an attribute is called
a setter or a mutator. -->