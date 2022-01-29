<!-- create subclass constructors -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Square</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php # Script 5.2 - square.php
    // Include the Rectangle class:
    require('Rectangle.php'); //calls class rectangle via require

    // • Declare the Square class:
    class Square extends Rectangle{

        function __construct($side = 0) //calls side
        {
            $this->width = $side; //this.width = side in javascipt
            $this->height = $side;
        }
    } // End of Square class.

    // • The premise is simple: there’s no reason to have to pass both a
    // height and a width value to a child of the Rectangle class when you
    // know you’re creating a square. So a new constructor is defined that
    // only takes one argument. That value will be assigned, within the
    // constructor, to the parent class’s attributes.

    // • Create a rectangle and report on it:
    $width = 21; //puts value 
    $height = 98;

    echo "<h2>With a width of $width and a height of $height...</h2>";
    $r = new Rectangle($width, $height);
    echo '<p>The area of the rectangle is ' . $r->getArea() . '</p>';
    echo '<p>The perimeter of the rectangle is ' . $r->getPerimeter() . '</p>';

    // • Create a square
    $side = 60;
    echo "<h2>With each side being $side...</h2>";
    $s = new Square($side); //calls class square
    echo '<p>The area of the square is ' . $s->getArea() . '</p>'; //60 * 60 = 3600
    echo '<p>The perimeter of the square is ' . $s->getPerimeter() . '</p>'; // (60 + 60) * 2 [PEMDAS]
    unset($r, $s);
    ?>
</body>

</html>