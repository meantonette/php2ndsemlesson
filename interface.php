<!--to use interfaces -->

<!doctype html>
<html	lang="en">
<head>
<meta	charset="utf8">
<title>Interface</title>
<link	rel="stylesheet" href="style.css">
</head>
<body>
<?php #	Script	6.4	- interface.php

// • Declare	the iCrud interface:
 interface	iCrud {
 public	function	create($data);
 public	function	read();
 public	function	update($data);
 public	function	delete();
 }

// • The iCrud interface	identifies	four	necessary	methods.	Two	
// of	the	methods	expect	to	take	data	as	their	lone	argument.	
// The	other	two	methods	take	no	arguments. All	the	
// methods	are	public,	which	is	required.
// • Begin	defining	the User class:
class User implements	iCrud {
private	$_userId =	NULL;
private	$_username	=	NULL;
// • The User class	implements iCrud,	which	means	it	
// must	define	the	four	methods	identified	in	the	
// interface.	To	demonstrate	this	concept,	without	
// overwhelming	you	with	code,	I’m	going	to	define	
// just	two	attributes	in	the	class,	both	of	which	will	
// be	private.
// • Define	the	constructor:
function __construct($data)	{
$this->_userId =	uniqid();
$this->_username	=	$data['username'];
}	//	End	of	constructor.

// Define	the create() method:
function	create($data)	{
self::__construct($data);
}

// • By	implementing	the iCrud interface,	this	class	is	forced	
// to	have	a create() method	that	takes	a	single	
// argument.	However,	the	constructor	already	does	
// what’s	required	to	create	a	new	object	of	this	type,	so	
// this	method	can	just	call	the	constructor	(using	the	
// keyword self,	which	refers	to	the	current	class,	plus	the	
// scope	resolution	operator),	passing	along	the	provided	
// data.

// Define	the read() method:
function	read()	{
return	array('userId'	=>	$this->_userId,	'username'	=>	$this->_username);
}
// The read() method	takes	no	arguments	and	returns	an	
// array	of	information.	In	this	hypothetical	example,	the	
// information	is	represented	by	internal	variables.	In	a	
// real-world	application,	the read() method	might	fetch	
// the	associated	information	from	the	database,	using	
// the	internal,	private	ID	value	to	know	which	record	to	
// fetch.
// •Define	the update() method:
function update($data)	{
$this->_username	=	$data['username'];
}

// • Presumably,	the	user	ID	value	cannot	be	updated,	
// so	the update() method	as	written	only	updates	a	
// single	internal	attribute.	Again,	you’d	want	to	use	
// proper	validation	here,	instead	of	assuming	
// that $data['username'] exists.

// Define	the delete() method	and	complete	the	class:
public	function	delete()	{
$this->_username	=	NULL;
$this->_userId =	NULL;
}
}	//	End	of	User	class.
// • The delete() method	clears	out	the	values	of	the	
// attributes.	In	a	real-world	example,	it	might	delete	the	
// corresponding	record	from	the	database	instead.
// • Create	a	new User object:
$user	=	array('username'	=>	'trout');
echo	"<h2>Creating	a	New	User</h2>";
$me	=	new	User($user);

// • To	make	the	interface	more	useful,	two	of	its	
// methods	expect	to	receive	a	single	argument,	
// which	would	be	an	array	of	data.	If	the User class	
// also	stored	an	email	address	and	password,	those	
// would	be	represented	in	this	one	array,	too.

// Get	the	user’s	ID:
 $info	=	$me->read();
echo	"<p>The	user	ID	is	{$info['userId']}.</p>";
// • The read() method	fetches	the	object’s	information,	returned	as	an	array.
// • Change	the	user’s	name	and	then	confirm	the	change:
//read will return an array

 $me->update(array('username'	=>	'troutster'));
 $info	=	$me->read();
 echo	"<p>The	user	name	is	now	{$info['username']}.</p>";

// • Delete	the	record:
 $me->delete();
//vardump
// • Note	that	this	line	does	not	get	rid	of	the User object.	It	only	clears	out	the	
// internally	stored	values.

// • Complete	the	page:
 $me->delete();
 unset($me);?>
 </body>
 </html>