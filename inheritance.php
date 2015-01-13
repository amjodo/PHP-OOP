 <?php
 	class Elephant{
 		public $firstName;
 		public $lastName;
 		public $gender;
 		public $weight;

 		function __construct($firstName,$gender,$lastName,$weight){
 			$this->firstName = $firstName;
 			$this->gender = $gender;
 			$this->lastName = $lastName;
 			$this->weight = $weight;
 		}

 		function getName(){
 			return "Hello my name is " .$this->firstName;
 		}


  }
 	   $e1 = new Elephant("Daisy", "F", "Gonzales", 120);

 	   echo $e1->getName();
//                                    //
 	   class Dog{
 		public $firstName;
 		public $lastName;
 		public $gender;
 		public $weight;

 		function __construct($firstName,$gender,$lastName,$weight){
 			$this->firstName = $firstName;
 			$this->gender = $gender;
 			$this->lastName = $lastName;
 			$this->weight = $weight;
 		}

 		function getName(){
 			return "Hello my name is " .$this->firstName;
 		}


  }
 	   $e1 = new Dog("Duke", "M", "Gonzoogey", 120);

 	   echo $e1->getName();
//                                             // 
class Cat{
 		public $firstName;
 		public $lastName;
 		public $gender;
 		public $weight;

 		function __construct($firstName,$gender,$lastName,$weight){
 			$this->firstName = $firstName;
 			$this->gender = $gender;
 			$this->lastName = $lastName;
 			$this->weight = $weight;
 		}

 		function getName(){
 			return "Hello my name is " .$this->lastName;
 		}


  }
 	   $e1 = new Cat("David", "M", "Gonzales", 120);

 	   echo $e1->getName();	   

 	?>