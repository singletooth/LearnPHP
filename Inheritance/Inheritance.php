<?php
class Student{
	public $science;
	public $math;
	public function total_marks($q, $r){
		 $this->science = $q;
		$this->math = $r;
	}
}
class Teacher extends Student{
	public $total;
	public function add_marks(){
		echo "Marks in Science: = " . $this->science ."<br>";
		echo "Marks in Math: = " . $this->math ."<br>";

		$this->total = $this->science + $this->math;
		echo "<br>Total Marks of the Student: = " . $this->total . "<br><br>";
	}
}
$teacher = new Teacher;
$teacher->total_marks(85, 93);
$teacher->add_marks();

echo "<font color=green>Multilavel Inheriatance</font>=====================================================================================================<br>";

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
echo "<font color=green>Hierarchical Inheriatance</font>====================================================================================================<br>";

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
		return $this->a + $this->b;
	}
	public function display(){
		echo "Multiplication: " . $this->multi() . "<br>";
	}
}
$father1 = new Father1;
$daughter = new Daughter;
$father1->getValue(23, 24);
$father1->display();