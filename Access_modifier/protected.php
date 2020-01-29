<?php
//Cannot access Protected Property or Method Outside Class or Objet;
//Protected Property or Class cna be accessed within same class and
//Child Class can access Parent's or GrandParent's Protected Property or Method;

class Father{

	public $a;
	public function displayParent(){

		echo "Parent Function $this-a";
	}
}

$father = new Father;
$father->a = "sandeep"; //cann't accessed from outside;