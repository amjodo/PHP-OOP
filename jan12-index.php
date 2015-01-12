<?php
	class Athlete{
		public $height = 6;
		public $weight = 150;
		public $gender = "male";

		public function __construct($height,$weight,$gender){
			$this->height = $height;
			$this->weight = $weight;
			$this->gender = $gender;
		}
		function run(){
			return "Cam is " . $this->height . "feet tall.";
		}

	}

	$athlete = new Athlete;
	print "I am now finished";