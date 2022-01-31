<!-- to use the namespace class -->

<!doctype html>
<html	lang="en">
<head>
    <meta	charset="utf-8">
<title>Namespace</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php #	Script	6.10	- namespace.php

// Include	the	namespace file:
// require('MyNamespace/Company/Company.php');

require('Company.php');

// • Create	a Department object:
$hr =	new	\MyNamespace\Company\Department('Accounting');

// • Create	two	employees:
$e1	=	new	\MyNamespace\Company\Employee('Holden	Caulfield');

$e2	=	new	\MyNamespace\Company\Employee('Jane Gallagher');

// Add	the	employees	to	the	department:
$hr->addEmployee($e1);

$hr->addEmployee($e2);

unset($hr,	$e1,	$e2);
?>
</body>
</html>