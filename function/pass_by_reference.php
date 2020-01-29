<?php

	//When you pass and argument by reference, that gives code in the function direct access to that argument back in the calling code;
	//To have an argument to a function always passed by reference, prepend an ampersand (&) to the parameter name in the function definition;

	//Ex:- 

		//function add (&$a){
	
	//}

//Pass by reference;	or passing of address; as C language;

	$n = 2;

	echo "Value of n = $n <br /><br />";
	function add(&$a){		//passed by reference
		echo "Value inside function $a <br /><br />";
		$a = 4;			
		echo "Value not changed after Re- asigned value inside the function $a <br /><br />";
	}
	add($n);		//paasing address of n variable;

	echo "Value of n = $n <br /><br />";



