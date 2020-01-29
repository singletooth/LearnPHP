<?php
//public Property or Method can be accessed from anywhere;
//Access Modifier or spacifier or Visibility Mode are same word;
//All properies and Methods are by Default Public unless you declare private or protected;

class Father{
	public $a;
	public function displayParent($x){
		$this->a = $x;
		echo "Parent Function $this->a <br>";
	}
	public function money($z){
		return	$this->a = $z;
	}
}
class Son extends Father{
	public function displayChild($y){
		$this->a = $y;
		echo "Child value is $this->a <br>";		
	}
}
class GrandSon extends Son{
	public function displayGrandSon(){
		echo "Parent's 2nd Value : " . $this->money(199) . "<br>";
	}


}

$obj = new GrandSon;
$obj->displayParent(52);
$obj->displayChild(200);
$obj->displayGrandSon();

