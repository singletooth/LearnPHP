<?php
class GrandFather{
	public $a;
	public $b;
	public function getValue($x, $y){
		$this->a=$x;
		$this->b=$y;
	}
}
class Father extends GrandFather{
	public $c = 25;
	public $sum;
	public function add(){
		$this->sum = $this->a + $this->b + $this->c;
		return $this->sum;

	}
}
class Son extends Father{
	public function display(){
		echo "Value of A: $this->a <br>";
		echo "Value of B: $this->b <br>";
		echo "Value of C: $this->c <br>";
		echo "Value of sum: " . $this->add(). "<br>";
	}
}
$son = new Son;
$son->getValue(15, 21);
$son->display();