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