<?php
	//Can't call Conditional Function before it's definition;
	if(TRUE){
		function display(){
			echo "Conditional Function <br><br>";	
		}
	}
	display();

	//============================================

	if(FALSE){
		function display1(){
			echo "Conditional Function <br><br>";	
		}
	}
	display1();


//=================================================

display2();

if(TRUE){
		function display2(){
			echo "Conditional Function <br><br>";	
		}
	}