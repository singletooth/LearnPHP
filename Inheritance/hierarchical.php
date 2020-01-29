<?php
class GrandFather1{
	public $a;
	public $b;
	public function getValue($x, $y){
		$this->a=$x;
		$this->b=$y;
	}
}
class Father1 extends GrandFather1{
	public function add(){
		return $this->a + $this->b;
	}
	public function display(){

		echo "Value of A: =  $this->a <br>";
		echo "Value of B: = $this->b <br>";
		echo "Addition: = " . $this->add() . "<br>";
	}
}
class Daughter extends GrandFather1{
	public function multi(){
		return $this->a * $this->b;
	}
	public function display(){
		echo "Multiplication: " . $this->multi() . "<br>";
	}
}
$father1 = new Father1;
$daughter = new Daughter;
$father1->getValue(23, 24);
$father1->display();
$daughter->getValue(18, 33);
$daughter->display();