<?php
	//By default, functiion arguments are passed by value (so that if the value of the argument within the function is changed, it does not get changed outside of the function). When you pass data to a function, a copy of that data is passed. For example if you pass a variable, a copy is made of that variable and that copy is actually passed to the function;

	//Pass by value;

	$n = 2;

	echo "Value of n = $n <br /><br />";
	function add($a){		//$n = $a = 2 Here a is duplicate of n(copy of n);
		echo "Value inside function $a <br /><br />";
		$a = 4;			//re-asigned value of a;
		echo "Re- asigned value inside the function $a <br /><br />";
	}
	add($n);		//here n = 2;

	echo "Value of n = $n <br /><br />";