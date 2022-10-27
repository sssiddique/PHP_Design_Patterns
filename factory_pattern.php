<?php

//Step One: Declare the Main Class
class Person {
// Step Six: Create variables to pass value to the method from the initialized instance below.
	private $firstName;
	private $lastName;

//	Step Seven: Initializing the variables with the parameter value.
	public function __construct( $fname, $lname ) {
		$this->firstName = $fname;
		$this->lastName  = $lname;
	}

// Step Two: Declare the main method within the class
	public function fullName() {
		return $this->firstName . ' ' . $this->lastName;
	}

}

// Step Three: Call The main class within this new class within a method.
class newPerson {
	public static function createEmployee( $fname, $lname ) {
		return new Person( $fname, $lname );
	}
}

// Step Four: Create an instance of the main classes method by invoking the Step Three Function. And initialize parameter.
$employee = newPerson::createEmployee( "Fatimah", "Siddiqua" );
// Step Five: print the function you want to show from the class which was inherited.
print_r( $employee->fullName() );

?>
