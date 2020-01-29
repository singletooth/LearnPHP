<?php

class Father{
	public $a;
	protected function __construct($x){
		echo "<br>Patent Constructor colled.<br>";
		$this->a = $x;
		echo $this->a;
	}
}
class Son extends Father{
	public $b;
	public function __construct($x, $y){
		parent::__construct($x);
		echo "<br>Child Constructor Called<br>";
		$this->b = $y;
		echo $this->b;
	}
}
$obj = new Son(10, 20);


echo "<pre>";
var_dump($obj);