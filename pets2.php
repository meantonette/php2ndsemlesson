<!-- override methods -->

<!doctype html><html lang="en">
<head><meta charset="utf-8">
<title>Pets</title><link rel="stylesheet" href="style.css"></head><body>
<?php 

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

//added ••••
function play() {
    echo "<p>$this->name is playing.</p>";
}
} // End of Pet class.

//  Declare the Cat class:

//changes ••••
// In the Cat class, change the name of climb() to play().
// Now the Pet class’s play() method has been
// overridden in the Cat class.

class Cat extends Pet {
    // function climb() {
    // echo "<p>$this->name is climbing.</p>";
    // }
    function play() {
        echo "<p>$this->name is playing.</p>";
        }
    }

//  Declare the Dog class:

//changes ••••
// • In the Dog class, change the name
// of fetch() to play().

 class Dog extends Pet {
    function play() {
    echo "<p>$this->name is playing.</p>";
    }
    } // End of Dog class.

// Create two new pets:
$dog = new Dog('Satchel');
$cat = new Cat('Bucky');
$pet = new Pet('Rob');

$dog->eat();
$cat->eat();
$dog->sleep();
$cat->sleep();
// $dog->fetch();
// $cat->climb();

//changes ••••
$dog->play();
$cat->play();
$pet->play();

//added ••••
$pet->eat();
$pet->sleep();

unset($dog, $cat, $pet);
?>
</body>
</html>

<!-- • The combination of a function’s name and its
arguments (the number of arguments, specifically) is
referred to as the function’s signature. In PHP 5, except
for constructors, any derived class must use the same
signature when overriding a method.
• Overriding a method in such a way that it also takes
a different number of arguments than the original is
referred to as overloading a method. This can be
accomplished in PHP but not as easily as overriding
one. -->
