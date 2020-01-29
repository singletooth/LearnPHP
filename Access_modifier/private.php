<?php

//private property or Method can be accessed only withibn same class;
//Private Property cannot be access outside class or with objedt;
//In Inheritance, Child Class cannot access parent's private property or Method;
class Father{
  private $a;
  public $b;
  public function displayParent($x){
    $this->a=$x;
    echo "Parent Function $this->a";
  }
}

$father = new Father();
$father->displayParent("<br>This function displaying father class<br>");

//=======================================================

class Son extends Father{

  public function displaychild($b){

    echo $this->a; //Notice: Undefined property: Son::$a in C:\xampp\htdocs\Learnphp\exp.php on line 24

    echo $this->b = $b; //This is public variable b of father class
  }

}

$son = new Son;
$son->displaychild("<br><br>This is public variable <b>b</b> of father class");

//=======================================================
