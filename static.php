<!-- 	create	static	members-->
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Static</title>
<link rel="stylesheet"  href="style.css">
</head>
<body>
<?php #	Script	5.6	- static.php
// • begin	declaring	the Pet class:
 class	Pet	{
 protected	$name;
 private	static	$_count	=	0;
 //kailangan nakaprivate para magkaroon ng getters ^^

// • The	class	still	has	the $name attribute,	but	it’s	now	marked	
// as protected so	that	only	this	and	derived	classes	can	
// access	it.	The $_count variable,	which	is	initialized	as	0,	is	
// both	private	and	static.	By	making	it	private,	only	this	class	
// can	access	it,	which	is	smart,	because	you	don’t	want	any	
// other	code	to	be	able	to	change	the	counter.	By	
// making $_countstatic,	you	ensure	that	it	retains	its	value	
// for	all	instances	of Pet or	any	derived	classes.

// • Create	the	constructor:
 function	__construct($pet_name)	{
 $this->name	=	$pet_name;
 self::$_count++;
 }
// • The	constructor	still	assigns	the	name	to	
// the $name attribute,	but	now	it	also	increments	the	
// counter.	Note	the	unique	syntax	for	referring	to	a	static	
// attribute.
// • Every	time	an	object	of	type Pet or	of	a	derived	type	is	
// created,	this	constructor	gets	called.	So	for	every	qualifying	
// object, $count is	incremented.
// • Create	the	destructor:
 function	__destruct()	{
 self::$_count--;
 }
// • Create	the	static	method	and	complete	the	class:
 public	static	function	getCount()	{
 return	self::$_count;
 }
 //kailangan nakapublic kasi lahat ng static method ay public ^^
 //yung kaninang private static count magiging public na
 }	//	End	of	Pet	class.

// • The getCount() method	is	public	and	static.	This	
// means	that	it’s	available	to	be	called	anywhere.	It	
// returns	the	value	of $_count.

//dog::$_count (another way to access the count instead of getCount())

// • Create	a Cat class:
 class	Cat	extends	Pet	{
}
//  Create	a	couple	more	subclasses:

 class	Dog	extends	Pet	{

 }

 class	Ferret	extends	Pet	{

 }

 class	PygmyMarmoset extends	Pet	{

 }
 
// • Create	a	new	object	and	print	the	number	of	
// pets:
 $dog	=	new	Dog('Old	Yeller');
 echo	'<p>After	creating	a	Dog,	I	now	have	'	.	
Pet::getCount()	.	'	pet(s).</p>';

// • When $dog is	created,	the Pet constructor	is	
// called,	incrementing $_count to	1.	To	return	
// this	value,	invoke Pet::getCount().

// • Create	a	couple	more	pets:
 $cat	=	new	Cat('Bucky');
 echo	'<p>After	creating	a	Cat,	I	now	have	'	. Pet::getCount()	.	'	pet(s).</p>';
 $ferret	=	new	Ferret('Fungo');
 echo	'<p>After	creating	a	Ferret,	I	now	have	' .	Pet::getCount()	.	'	pet(s).</p>';

 // • Have	the	unthinkable	happen	(my	condolences):
 unset($dog); //destruct
 echo	'<p>After	tragedy	strikes,	I	now	have	'	.	Pet::getCount()	.	'	pet(s).</p>';
// • When	a Dog (or	any	other	subclass)	object	is	
// destroyed	(here	using unset()),	the Pet destructor	
// is	invoked,	subtracting	1	from $_count.	(Again,	
// the Pet destructor	is	called	because	no	derived	
// class	has	its	own	destructor.)
// • Recover	by	getting	another	pet:
 $pygmymarmoset =	new	
PygmyMarmoset('Toodles');
 echo	'<p>After	creating	a	Pygmy	Marmoset,	I	
now	have	'	.	Pet::getCount()	.	'	pet(s).</p>';
 unset($cat, $ferret, $pygmymarmoset);

?>
</body>
</html>