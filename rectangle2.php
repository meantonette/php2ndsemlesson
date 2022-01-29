<!-- To use the Rectangle class -->

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf8">
    <title>Rectangle Constructor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php # Script 4.4 - rectangle1.php
    // • Include the class definition:
    require('Rectangle.php');
    // • Define the necessary variables and print an introduction:
    $width = 42;
    $height = 7;
    echo "<h2>With a width of $width and a height of
$height...</h2>";

    // • Create the object and assign the rectangle’s dimensions:
    // $r = new Rectangle();
    // $r->setSize($width, $height);

    //CHANGES••
    // ••Change the way the object is created so that it reads ••

    // This means that a Rectangle object can be created using either of these techniques:
    // default constructor- as it provides default values for its arguments. eg.//$r = new Rectangle();

    $r = new Rectangle($width, $height);
    $s = new Rectangle(100, 500);
    echo '<p>The area of the rectangle is ' . $s->getArea() . ' this is a new object</p>';
    // The object can now be created and the rectangle assigned its dimensions in one step.

    // • Print the rectangle’s area:
    echo '<p>The area of the rectangle is ' . $r->getArea() . '</p>';

    // • Print the rectangle’s perimeter:
    echo '<p>The perimeter of the rectangle is ' . $r->getPerimeter() . '</p>';
    // • Indicate whether or not this rectangle is also a square:
    echo '<p>This rectangle is ';
    if ($r->isSquare()) {
        echo 'also';
    } else {
        echo 'not';
    }
    echo ' a square.</p>';
    // • Delete the object and complete the page:
    unset($r);
    ?>
</body>

</html>

<!-- Methods can call each other, just as they would any
other function, but you’ll need to use $this again. The
following is unnecessary but valid:
• function getArea() {
if ($this->isSquare()) {
return ($this->width *
$this->width);
} else {
return ($this->width *
$this->height);
}
} -->