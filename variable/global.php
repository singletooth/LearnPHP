<?php
	//The variable which is declared outside a function has a GLOBAL scope. its accessibility is just outside the function.
	//if we want to access data outside a function from code inside a function we have to use GLOBAL keyword within the function;

	$a = 10;	//Global Variable;
	function display(){

		echo "Accessing value outside function = $a.<br><br>";
	}
	display();

	echo "Note:- Global variable Normally can't be accessed within function = $a. <br><br>";

echo "But:- Global variable can be accesse within the function with the help of <b>GLOBAL</b> keyword = $a.<br><br>";

$u = 11;	//Global Variable;
	function display1(){

			global $u;

		echo "Accessing value inside function = $u <br><br>";
	}
	display1();