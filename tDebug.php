<!-- To	use	traits -->
<!-- lahat ng classes pwede magamit ng trait -->

<?php #	Script	6.5	- tDebug.php
// • For	this	example,	one	script	will	define	the	trait	
// itself.	Another	script	will	create	an	object	that	uses	the	trait.
// • Begin	defining	the	trait:
 trait	tDebug {

//  Begin	defining	the dumpObject() method:
 public	function	dumpObject()	{
 $class	=	get_class($this);
// • The	method	will	take	no	arguments	but	will consistently	
// refer	to $this,	which	always	represents	the	current	object.
// • The	first	thing	this	method	does	is	find	the	class	
// name	of	the	current	object.	That’s	possible	by	
// invoking	the get_	class()function,	providing	it	
// with	the	object	whose	class	name	you’re	trying	to	
// determine.

// • Get	the	object’s	attributes	and	methods:
 $attributes	=	get_object_vars($this);
$methods	=	get_class_methods($this);
// • The	first	gets	the	attributes	for	a	given	object:	
// both	the	attribute	names	and	their	respective	
// values.	The	second	function	retrieves	the	
// methods	defined	in	the	associated class
// • Print	a	heading:
 echo	"<h2>Information	about	the	$class	object</h2>";
//  Print	the	attributes:
 echo	'<h3>Attributes</h3><ul>';
 foreach ($attributes	as	$k	=>	$v)	{
 echo	"<li>$k:	$v</li>";
 }
 echo	'</li></ul>';
// • The foreach loop	will	run	through	the	array	of	attributes	
// (even	if	there	is	only	one	attribute, $attributes will	still	be	
// an	array).	Within	the	loop,	each	attribute	name	and	value	is	
// printed	within	a	list.
//  Print	the	methods:
 echo	'<h3>Methods</h3><ul>';
 foreach ($methods	as	$v)	{
 echo	"<li>$v</li>";
 }
 echo	'</li></ul>';
 }	//	End	of	dumpObject()	method.

 }	//	End	of	tDebug trait.

?>