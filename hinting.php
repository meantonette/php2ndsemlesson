<!-- to use hinting -->

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Type	Hinting</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php #	Script	6.8	- hinting.php

// • Begin	declaring	the Department class:
 class	Department	{
 private	$_name;
 private	$_employees;
 function	__construct($name)	{
 $this->_name	=	$name;
 $this->_employees	=	array();
 }

// • Define	the addEmployee() method	and	
// complete	the	class:
 function	addEmployee(Employee	$e)	{
 $this->_employees[]	=	$e;
 echo	"<p>{$e->getName()}	has	been	added to	the	{$this->_name}	department.</p>";
 }
}	//	End	of	Department	class.

// • This	method	will	be	called	to	add	an	employee	to	
// the	current	department	object.	It	takes	one	
// argument,	which,	thanks	to	type	hinting,	must	be	
// of	type Employee.	
// • If	an	appropriately typed	argument	is	received,	it	
// will	be	added	to	the	internal,	
// private $employees array.	
// • For	confirmation	purposes	(and	to	have	the	final	
// script	output	something),	verification	of	the	
// added	employee	is	printed.
// • Define	the Employee class:

 class	Employee	{
 private	$_name;
 function	__construct($name)	{
 $this->_name	=	$name;
 }
 function	getName()	{
 return	$this->_name;
 }
 }	//	End	of	Employee	class.

//  Create	a Department:
 $hr =	new	Department('Human	Resources');

//  Create	two Employee objects:
 $e1	=	new	Employee('Jane	Doe');
 $e2	=	new	Employee('John	Doe');

//  Add	the	employees	to	the	department:
 $hr->addEmployee($e1);
 $hr->addEmployee($e2);
 unset($hr,	$e1,	$e2);
 ?>
 </body>
 </html>