<!--  use the scope resolution operator-->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pets</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php

    // • Start declaring the Pet class:
    class Pet{
        protected $name;

        // • Create the constructor:

        function __construct($pet_name)
        {
            $this->name = $pet_name;
            //added ••••
            self::sleep(); // self call all pets and sleep func
        }

        // • Define the eat() method:
        function eat()
        {
            echo "<p>$this->name is eating.</p>";
        }
        // • Define the sleep() method and complete the class:
        function sleep()
        {
            echo "<p>$this->name is sleeping.</p>";
        }


        function play()
        {
            echo "<p>$this->name is playing.</p>";
        }
    } // End of Pet class.

    //  Declare the Cat class:

    class Cat extends Pet{
        // function climb() {
        // echo "<p>$this->name is climbing.</p>";
        // }
        // function play() {
        //     echo "<p>$this->name is playing.</p>";
        //     }

        // Modify the Cat play() method so that it calls Pet play():
        function play()
        {
            parent::play();
            echo "<p>$this->name is playing.</p>";
        }
    } //ends cat class

    //  Declare the Dog class:
    class Dog extends Pet
    {
        // function play() {
        // echo "<p>$this->name is playing.</p>";
        // }

        //MODIFIED
        function play()
        {
            parent::play(); //calling from parent class the function play
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
<<<<<<< HEAD
    self::sleep(); //to make the pets all sleep
    }
=======
    $pet->eat();
    $pet->sleep();
>>>>>>> 4097a19cfe04fe768348c693ae26a2cbe0586cf5

    unset($dog, $cat, $pet);
    ?>
</body>

</html>