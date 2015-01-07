<?php
//lecture 1 creating classes & storing variables 1-6-15
class Fish {
	public $firstName = “Bob”;
	public $lastName = “Clown”;
	public $gender = “male”;
	public $price = 20;

	function getName() {
	return “{$this­>firstName}” .
	“{$this­>lastName}”;
}

}

$fish1 = new Fish();
$fish1­>firstName = “Bill”;
$fish1­>lastName = “Joke”;

print “The fish’s name is {$fish1­>getName()}.”;

//oututs the fish's name
class Cat {
	public $firstName = “Hello”;
	public $lastName = “Kitty”;
	public $gender = “female”;
	public $price = 100;

	function getName() {
	return “{$this­>firstName}” .
	“{$this­>lastName}”;
}

}

$cat1 = new Cat();
$cat1­>firstName = “Goodbye”;
$cat1­>lastName = “Kitty”;

print “The cat’s name is {$cat1­>getName()}.”;

//outputs the cat's name
class Monkey {
	public $firstName = “Zaboom”;
	public $lastName = “Afoob”;
	public $gender = “male”;
	public $price = 0;

	function getName() {
	return “{$this­>firstName}” .
	“{$this­>lastName}”;
}

}

$monkey1 = new Monkey();
$monkey1­>firstName = “Afoob”;
$monkey1­>lastName = “Zaboom”;

print “The monkey’s name is {$monkey1­>getName()}.”
//outputs the monkey's name


//lectute 2 creating constructor methods 1-7-15
/*You can use it to set things up, ensuring that essential properties are set and any necessary preliminary work is completed. 
Note that the method name begins with two underscore characters.*/

class Fish {
	public $firstName;
	public $lastName;
	public $breed;

	function __construct($title, $firstName, $lastName, $breed) {
		$this­>firstName = $firstName;
		$this­>lastName = $lastName;
		$this­>breed = $breed;
	}
	function getName() {
		return “{$this­>firstName}” .
		“{$this­>lastName}”;
	}
}

$fish1 = new Fish(“Bob”, “Clown”, “ClownFish”);
print “Fish 1: {$fish1­>getName()}\n;

class Cat {
	public $firstName;
	public $lastName;
	public $breed;

	function __construct($title, $firstName, $lastName, $breed) {
		$this­>firstName = $firstName;
		$this­>lastName = $lastName;
		$this­>breed = $breed;
	}
	function getName() {
		return “{$this­>firstName}” .
		“{$this­>lastName}”;
	}
}

$cat1 = new Cat(“Hello”, “Kitty”, “PursianCat”);
print “Cat 1: {$cat1­>getName()}\n; /* /n is = to /br but for php*/

class Monkey {
	public $firstName;
	public $lastName;
	public $breed;

	function __construct($title, $firstName, $lastName, $breed) {
		$this­>firstName = $firstName;
		$this­>lastName = $lastName;
		$this­>breed = $breed;
	}
	function getName() {
		return “{$this­>firstName}” .
		“{$this­>lastName}”;
	}
}

$monkey1 = new Monkey(“Zaboom”, “Afoob”, “Orangutang”);
print “Monkey 1: {$monkey1­>getName()}\n;

// Fish 1: Bob Clown
/*You see here that I can create a new project and even have properties there that I can have, but not use! Any
arguments supplied are passed to the constructor. So in my example I pass the the first name, the last name, and the
breed to the constructor. The constructor method uses the pseudo­variable $this to assign values to each of the
object’s properties. A Dog object is now easier to instantiate and safer to use. Instantiation and setup are completed
in a single statement. Any code that uses a Dog object can be reasonably sure that all its properties are initialized.
This predictability is an important aspect of object­oriented programming. You should design your classes so that
users of objects can be sure of their features. By the same token, when you use an object, you should be sure of its
type.*/

