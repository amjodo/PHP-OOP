 <?php
 //.............................................................//
 	class Elephant
 	{
 		public $firstName;
 		public $lastName;
 		public $gender;
 		public $weight;

 		function __construct($firstName,$gender,$lastName,$weight)
 		{
 			$this->firstName = $firstName;
 			$this->gender = $gender;
 			$this->lastName = $lastName;
 			$this->weight = $weight;
 		}

 		function getParent()
 		{
 			return "First name: "    . $this->firstName . "<br />" . 
 					"gender: "       . $this->gender . "<br />" . 
 					"last name: "    . $this->lastName . "<br />" . 
 					"weight: "       . $this->weight;
 		}
  }
  
 	   
	class Giraffe extends Elephant
	{
		function __construct($firstName,$gender,$lastName,$weight, $noSound)
		{
			parent::__construct($firstName,$gender,$lastName,$weight);
			$this->noSound = $noSound;
		}
	

	function greeting2()
	{
		return "Number of sound: " . $this->noSound;
	}

}

	$jamesBond = new Giraffe("Amber","F","Fredrick",120,"none");
	echo $jamesBond->getParent();

 	?>