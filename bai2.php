<?php 
	abstract class Supervisor {
		protected $sologan;
		 function saySloganOutLoud() {

		}
	} 
	interface Boss {
		function checkValidSlogan();
	}
	class EasyBoss  extends Supervisor implements Boss  {
		function setSlogan($string) {
			$this->sologan = $string;
		}
		 function saySloganOutLoud() {
		 	echo $this->sologan;
		}
		function checkValidSlogan() {
			$after = strpos($this->sologan,'after');
	 		$before = strpos($this->sologan,'before');
			if( isset($after) || isset($before)) {
				echo 'đạt yêu cầu';
			}
			else {
				echo ' không đạt yêu cầu';
			}
			
		}

	}
	class UglyBoss  extends Supervisor implements Boss {
		function setSlogan($string) {
			$this->sologan = $string;
		}
		 function saySloganOutLoud() {
		 	echo $this->sologan;
		}
		function checkValidSlogan() {
			$after = strpos($this->sologan,'after');
	 		$before = strpos($this->sologan,'before');
			if(isset($after) && isset($before)) {
				echo 'đạt yêu cầu';
			}
			else {
				echo ' không đạt yêu cầu';
			}
		}
	}
	$easyBoss = new EasyBoss();
	$uglyBoss = new UglyBoss();

	$easyBoss->setSlogan('Do NOT push anything to master branch before reviewed by supervisor(s)');

	$uglyBoss->setSlogan('Do NOT push anything to master branch before reviewed by supervisor(s). Only they can do it after check it all!');

	$easyBoss->saySloganOutLoud(); 
	echo "<br>";
	$uglyBoss->saySloganOutLoud(); 

	echo "<br>";

	$easyBoss->checkValidSlogan(); // true
	echo "<br>";
	$uglyBoss->checkValidSlogan(); // true
      
 ?>