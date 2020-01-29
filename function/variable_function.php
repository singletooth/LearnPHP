<?php
	//All function are individual so they can have their own different arguments/parameters;

	function one(){
		echo "hello friends !!! <br /><br />I amd one <br />";
	}
	function two(){
		echo "hello friend !!! <br /> <br />I amd two <br />";
	}
	function three(){
		echo "hello friend !!! <br /><br />I amd three <br />";
	}

	$f_variable = "three"; //assigning function name to a variable;
	$f_variable();			//calling function, have to write $ sign;
