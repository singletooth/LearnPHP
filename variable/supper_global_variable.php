<?php
	//Superglobals are built-in variables that are always available in all scpes;
	//It can be accessed from any function, class, anyother file;
	
	echo "Super Global variables <br><br>";
		// 1. $GLOBALS
		// 2. $_SERVER
		// 3. $_REQUEST
		// 4. $_POST
		// 5. $_GET
		// 6. $_FILES
		// 7. $_ENV
		// 8. $_COOKIE
		// 9. $_SESSION

		$a = 10;
		$b = 20;

		function display(){
			echo $GLOBALS ['a'] . "<br />";
			echo $GLOBALS ['b'] . "<br />";

		}
		display();