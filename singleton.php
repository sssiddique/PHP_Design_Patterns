<?php
// Conditions to be the singleton method -
// A. A Private static variable, holding the only instance of the class.
// B. A private constructor, so it cannot be instantiated anywhere else.
// C. A public static method, to return the single instance of the class.

// Example:
class Singleton{
	private static $instance = NULL;
	private function __construct(){
		echo "DB Connected </br>";
	}
	public static function getInstance(){
		if(self::$instance == NULL){
			self::$instance = new Static();
		}else{
			echo "Already connected </br>";
		}
	}
}

$obj = Singleton::getInstance();

?>
