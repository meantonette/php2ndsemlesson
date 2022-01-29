<?php # Script 4.1 - HelloWorld.php

//defining the class:
class HelloWorld
{
    function sayHello($language = 'English') //defaul value
    {
        // This class currently contains no attributes (variables),
        // as those would have been declared before the
        // methods. This method is called sayHello(). It takes one argument: the language for the greeting. 

        // Start the method’s code:
        echo '<p>';
        switch ($language) {
            case 'Dutch':
                echo 'Hallo,wereld!';
                break;
            case 'French':
                echo 'Bonjour,monde!';
                break;
            case 'German':
                echo 'Hallo, Welt!';
                break;
            case 'Italian':
                echo 'Ciao, mondo!';
                break;
            case 'Spanish':
                echo '¡Hola, mundo!';
                break;
            case 'English':
            default:
                echo 'Hello, world!';
                break;
        }
        echo '</p>';
    }
}
