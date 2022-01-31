<!-- create	the	Triangle class -->

<?php #	Script	6.2	- Triangle.php
// • Begin	declaring	the Triangle class:
class	Triangle extends	shape	{
    //dont extend any class ex ^^ kung di gagamitin

// • Declare	the	attributes:
 private	$_sides	=	array();
private	$_perimeter	=	NULL;
// • Define	the	constructor:
function	__construct($s0	=	0,	$s1	=	0,	$s2	=	0)	{
    //three parameters    ^          ^           ^

$this->_sides[]	=	$s0;
$this->_sides[]	=	$s1;
$this->_sides[]	=	$s2;
$this->_perimeter =	array_sum($this -> _sides);
}

// The array_sum() function	adds	up	all	the	values	of	
// all	the	elements	in	an	array.
// • Create	the getArea() method:

public	function	getArea()	{
return	(SQRT(($this->_perimeter/2)	*	
(($this->_perimeter/2)	- $this->_sides[0])	*	
(($this->_perimeter/2)	- $this->_sides[1])	*	
(($this->_perimeter/2)	- $this->_sides[2])));
}
// • Create	the getPerimeter() method:
public	function	getPerimeter()	{
 return	$this->_perimeter;
 
 //returns the array_sum
 }
 }