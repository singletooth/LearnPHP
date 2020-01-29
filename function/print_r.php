<?php
	//This function is used to display information in a way that's readable by humans;
	//Basically this functiion are used to read array;
	//When Return is set to TRUE, print_r() will return the information rather than print it;

	$name = array("Rahul", "Sonam", "Sumit", "Priti");
	echo "<pre>";
	print_r($name);		//It will print information
	echo "</pre>";

					//or both are same array

$name [0] = "Rahul";
$name [1] = "Sonam";
$name [2] = "Sumit";
$name [3] = "Priti";

	echo "<pre>";
	print_r($name);		//It will print information
	echo "</pre>";

					//or giving true balue

	//$name = array("Rahul", "Sonam", "Sumit", "Print");

	$result = print_r($name, true);		//It returns information;
	echo "$result";


