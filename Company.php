<?php #	Script	6.9	- Company.php
//USE NAMESPACES

// • This	script	will	only	define	a	namespace,	and	it	
// will	not	contain	any	HTML.

// • Declare the MyNamespace\Company namespace: 
namespace MyNamespace\Company;

// • The	premise	here	is	that	all	of	your	reusable	code	
// would	go	into	the MyNamespace namespace,	
// whose	name	you	would	make	more	unique.	
// Within	that	entire	library,	all	of	the	classes	and	
// code	related	to	creating	company-based	projects	
// would	go	in	the Company namespace,	declared	
// here.

// • Define	the Department class:
class	Department	{
private	$_name;
private	$_employees;
function	__construct($name)	{
$this->_name	=	$name;
$this->_employees	=	array();
}

function	addEmployee(Employee	$e)	{
$this->_employees[]	=	$e;
echo	"<p>{$e->getName()}	has	been	added	to	the	{$this->_name}	department.</p>";
 }
}	//	End	of	Department	class.
// • Define	the Employee class:

class	Employee	{
private	$_name;
function	__construct($name)	{
$this->_name	=	$name;
}
function getName()	{
return	$this->_name;
}
}	//	End	of	Employee	class.