<!-- To	use	the	new	Rectangle	class -->

<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Trait</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php #	Script	6.7	- trait.php
// • Load	the	trait	and	class	definitions:
require('tDebug.php');
require('rectangle.php');

// • Create	and	debug	an	object:
$r	=	new	Rectangle(42, 37);
$r-> dumpObject();
 unset($r);
?>
</body>
</html>