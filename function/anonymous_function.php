<?php
	//Anonymous functions, also known as closures or Lambda, allow the creation of functions which have no specified name;

	echo "<b><u><font color=green>Normal Function.</font></u></b><br><br>";
	function show(){
		echo "Normal Function called by (Function_calling) function. <br><br>";
	}		//semicolon not required in Normal Functions;
	show();

	echo "<b><u><font color=green>Anonymous Function.</font></u></b><br><br>";
	/*function(){
		echo "Normal Function <br><br>";
	};	*/	//semicolon is necessary in Anonymous Functions, this function works as an Expression. It can be asigned in any variable and there after you call it like variable function;

	$an = function(){
		echo "Anonymous Functions can be called with the help of variable function.<br><br>";
	};
	$an();

	echo "<b><u><font color=green>Anonymous function with parameter.</font></u></b><br><br>";

	$an = function($p){
		echo "Anonymous Function called with $p.<br><br>";
	};
	$an("parameter");

	echo "<b><u><font color=green>Global Variables can't be accessed directly within Anonymous function.</font></u></b><br><br>";

	$y = 34; 	//Global Variable.
	$an = function(){
		echo "Anonymous Functions value is =  $y.<br><br>";
	};
	$an();
echo "<b><u><font color=green>Global Variables can be accessed within the Anonymous function with the help of parameters.</font></u></b><br><br>";

$y = 34; 	//Global Variable.
	$an = function($q){
		echo "Anonymous Functions value is =  $q.<br><br>";
	};
	$an($y);

echo "<b><u><font color=green>Global Variables can be accessed within the Anonymous function with the help of use keyword.</font></u></b><br><br>";

$r = 67; 	//Global Variable.
	$an = function() use ($r){
		echo "Anonymous Functions value is =  $r.<br><br>";
	};
	$an();

	echo "<b><u><font color=green>Global Variables can be accessed within the Anonymous function with the help of use keyword.</font></u></b><br><br>";
$y = 35;	//Global Variable;
$r = 67; 	//Global Variable;
	$an = function($p) use ($r){
		echo "Anonymous Functions value is =  $r $p.<br><br>";
	};
	$an($y);


