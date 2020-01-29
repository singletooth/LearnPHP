<?php
	//Whose value can't be modified;
	//define() function is used to create a constant variable;
	//&quot;= ""

	echo "Syntax:-
		define(&quot;constant_variable&quot;, value, case-insensitive);
		case-insensitive means TRUE ir FALSE (by Default FALSE)
		Example:-
		define(&quot;pi&quot;, 3.141592); <- Here &quot;pi&quot; is case-sensitive; means &quot;PI&quot; and &quot;pi&quot; are diferent variable;
		but
		define(&quot;pi&quot;, 3.141592, TRUE); <- Here &quot;pi&quot; is non-case sensitive; means &quot;PI&quot; and vpiv are same and output same value <br><br>";

	echo "=>No need to start constant variable name with $ sign.<br>";
	echo "=>Name only starts with a letter and an underscore (_). <br>";
	echo "=>Variable name cannot start with a number. <br>";
	echo "=>It is case sensitive which implies that the variable <b>num</b> in lowercase is different from variable NUM in uppercase. But we can make it case insensitive. <br>";
	echo "=>Constants are automatically global and can be used across the entire script. <br>";
	echo "=>Can't use Predifined constant name e.g. PHP_VERSION, PHP_OS etc. <br>";
	echo "=>Can't use reserved keywords. e.g. else, if etc. <br><br>";



	define("pi", 3.141, TRUE);	//If here value be FALSE then only same matching variable allowed;
	echo "pi value is = " . pi ."<br><br>";
	echo "pi value is = " . PI ."<br><br>";
	echo "pi value is = " . Pi ."<br><br>";
	echo "pi value is = " . pI ."<br><br>";

	
	define ("site", "GoldenTooth");

	echo site . "<br><br>";

	echo "site<br><br>";

	echo "If we re-asign the value of site then not possible it give error <br><br>";

	/*site = "Single Tooth"; //re-asigning is not allowed;

	echo site . "<br><br>";*/

