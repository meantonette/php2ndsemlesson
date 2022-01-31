<!-- create	abstract	classes	and	methods -->

<?php #	Script	6.1	- Shape.php

// • Start	defining	the Shape class:
abstract	class	Shape	{

// • Define	the	first	abstract	method:
abstract	protected	function	getArea();

//kapag walang getters sa isang class tatanggalin yung 
//laman ng method/getters ^^^^ para di manghingi ng value or di magkaerror

// • Define	the	second	abstract	method:
abstract	protected	function	getPerimeter();
}