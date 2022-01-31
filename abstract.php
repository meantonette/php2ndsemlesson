<!-- To	use	the	Triangle	class -->
<!-- shape -> triangle -> abstract -->

<!doctype html><html	lang="en">
<head>
<meta charset="utf8">
<title>Triangle</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<?php #	Script	6.3	- abstract.php
// • Load	the	class	definitions:
require('shape.php');
require('Triangleclass.php');
// • Set	the	sides	of	the	triangle:
$side1	=	5;
$side2	=	10;
$side3	=	13;
// • Print	an	introduction	and	create	a	new	triangle:
echo	"<h2>With	sides	of	$side1,	$side2,	and	
$side3...</h2>";
$t	=	new	Triangle($side1,	$side2,	$side3);
// Print	the	area:
echo	'<p>The	area	of	the	triangle	is	'	.	$t->getArea()	.	'</p>';

// • Print	the	perimeter:
echo	'<p>The	perimeter	of	the	triangle	is	'	. $t->getPerimeter()	.	'</p>';
unset($t);
?>
</body>
</html>