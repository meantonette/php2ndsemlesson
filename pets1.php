<!-- inherit from a class -->

<!doctype html><html lang="en">
<head><meta charset="utf-8">
<title>Pets</title><link rel="stylesheet" href="style.css"></head><body>
<?php # Script 5.1 - pets1.php
// • Start declaring the Pet class:
class Pet {
public $name;

// • Pet has one attribute: the pet’s name.
// • Create the constructor:

function __construct($pet_name) {
$this->name = $pet_name;
}
// • The constructor takes one argument: the name of the pet. This gets assigned to the class’s $name attribute.
// • Define the eat() method:
function eat() {
echo "<p>$this->name is eating.</p>";
}
// • Define the sleep() method and complete the class:
function sleep() {
echo "<p>$this->name is sleeping.</p>";
}
} // End of Pet class.

//  Declare the Cat class:
class Cat extends Pet {
    function climb() {
    echo "<p>$this->name is climbing.</p>";
    }
    }

//  Declare the Dog class:
 class Dog extends Pet {
    function fetch() {
    echo "<p>$this->name is fetching.</p>";
    }
    } // End of Dog class.

// Create two new pets:
$dog = new Dog('Satchel');
$cat = new Cat('Bucky');

$dog->eat();
$cat->eat();
$dog->sleep();
$cat->sleep();
$dog->fetch();
$cat->climb();

unset($dog, $cat);
?>
</body>
</html>