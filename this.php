<?php
	//naming convantion tells that first leter of class name should be capital;
class Test{

	public $name = "sandeep";

	public function __construct(){

	}
	
	public function set_name($name)
	{
			$this->name = $name;
						
	}
	public function print_this(){

		echo "<pre>";
		echo "Outputting this<br>";
		print_r($this);
		echo "</pre>";
	}
	public function get_name(){

		return $this->name;
	}
	public function something(){

		echo $this->get_name();
	}


}

$obj = new Test();
$obj->set_name("Sandeep Kumar Dubey");

echo "<pre>";
echo "Outputting obj outside the class<br/>";
print_r($obj);
echo "</pre>";

$obj->print_this();

$obj1 = new Test();
$obj1->set_name("Arpit Kumar Dbuey");
$obj1->print_this(); 

echo get_class($obj) . "<br><br>";

$methods = get_class_methods($obj);

foreach ($methods as $value) {

	echo "$value <br>";
}
	



$prop = get_class_vars(get_class($obj));

foreach ($prop as $vl => $value) {
    echo "$vl :$value<br>";

}
//==========================================================================================
echo "<br><br><font color=green size=5>Another example of this</font><br><br>";

class student{

		public $name = "sandeep <br>";

		public function test(){

			echo $this->name;		
			
		}
		public function test1($a){

			echo $this->name=$a;
		}

}

$obj = new student;
$obj->test();

$obj1 = new student;
$obj1->test1("pradeep");






?>