<?php
//A variable within a function reset every time when we call it. In case if we need, variable values to remain save even outside the function then we have to use static keyword.
class Father{
	public static $a = 10;

}
class Son extends Father{
	public function disp(){
		echo Parent::$a;
	}
}
$obj = new Son;
$obj->disp();

echo "<br><br>New Line is below <br><br>";

function disp(){
	$i = 0;			//Not static variable
	$i++;
	return $i;
}
echo disp() . "<br><br>";
echo disp() . "<br><br>";
echo disp() . "<br><br>";
echo disp() . "<br><br>";


echo "<br><br>New Line is below <br><br>";

function disp1(){
	static	$l = 0; //Now this variable declared as static so this runs only one time
		$l++;		//this runs every time;
		return $l;	//this also runs every time;
}	
		echo disp1() . "<br><br>";
		echo disp1() . "<br><br>";
		echo disp1() . "<br><br>";
		echo disp1() . "<br><br>";
		echo disp1() . "<br><br>";

	//static variable runs only one time;
