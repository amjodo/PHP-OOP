 <?php
 //.............................................................//
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

  }
 	   
	class Giraffe extends Elephant{
		function __consturct($firstName,$gender,$lastName,$weight,$noSound){
			$this->noSound = $noSound;
		}
	}

	function greetings(){
		return $this->noSound;
		parent::__construct($firstName,$gender,$lastName,$weight);
	}

	class Hippo extends Elephant{
		function __construct($firstName, $gender, $lastName, $weight, $drinkWater){
			$this->drinkWater = $drinkWater;
		}

		function goodbye(){
			return $this->drinkWater;
		}	
    }

	$e1 = new Elephant("Daisy", "F", "Gonzales", 120);
 	print "Hello my name is " . $firstName->getName();
 	parent::__construct($firstName,$gender,$lastName,$weight);
//....................................................................//
 	class Dino{
 		public $name;
 		public $height;
 		public $color;
 		public $weight;

 		function __construct($name,$height,$color,$weight){
 			$this->name = $name;
 			$this->height = $height;
 			$this->color = $color;
 			$this->weight = $weight;
 		}

  }
 	   
	class Saur extends Dino{
		function __consturct($name,$height,$color,$weight,$tRex){
			$this->tRex = $tRex;
		}
	}

	function welcome(){
		return $this->tRex;
		parent::__construct($name,$height,$color,$weight);
	}

	class Mono extends Dino{
		function __construct($name, $height, $color, $weight, $sipWater){
			$this->sipWater = $sipWater;
		}

		function adios(){
			return $this->sipWater;
		}	
    }

	$d1 = new Dino("Rino", "M", "Goober", 1020);
 	print "Rooaaaar! Hi my name is " . $name->getName();
 	parent::__construct($name,$height,$color,$weight);
//................................................................// 
 	class Shoes{
 		public $brand;
 		public $size;
 		public $swoosh;
 		public $stripes;

 		function __construct($brand,$size,$swoosh,$stripes){
 			$this->brand = $brand;
 			$this->size = $size;
 			$this->swoosh = $swoosh;
 			$this->stripes = $stripes;
 		}

  }
 	   
	class Fresh extends Shoes{
		function __consturct($brand,$size,$swoosh,$stripes,$nike){
			$this->nike = $nike;
		}
	}

	function yaaas(){
		return $this->nike;
		parent::__construct($brand,$size,$swoosh,$stripes);
	}

	class andClean extends Shoes{
		function __construct($brand, $size, $swoosh, $stripes, $waterProof){
			$this->waterProof = $waterProof;
		}

		function bueno(){
			return $this->waterProof;
		}	
    }

	$s1 = new Shoes("Free run", 6, "white", "none");
 	print "I am wearing " . $name->getName();
 	parent::__construct($brand,$size,$swoosh,$stripes);   
//..........................................................//
 	?>