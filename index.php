<?php
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

//
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

$cat1 = new Fish();
$cat1­>firstName = “Goodbye”;
$cat1­>lastName = “Kitty”;

print “The cat’s name is {$cat1­>getName()}.”;

//
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
