<?php 
	abstract class Supervidor 
	{
		protected $slogan;
		abstract public function saySloganOutLond();
	}
	interface Boss
	{
		public function ValidSlogan();
	}
	class EasyBoss extends Supervidor implements Boss
	{
		private $be = 'before';
		private $af= 'after';
		protected $slogan="";
		public function saySloganOutLond ()
    	{
    		$a=$this->ValidSlogan();
			if($a===false){
				echo'Chuỗi không hợp lệ';
			}
			else{
				echo "Chuỗi hợp lệ";
			}
    	}
    	public function setSlogan($sl)
    	{
			$this->slogan=$sl;
    	}
    	public function ValidSlogan()
    	{
			if(strpos($this->slogan,$this->be)!==false|| strpos($this->slogan,$this->af)!==false)
        	{
        		return true;
        	}
        	else
        	{
        		return false;
        	}
    	}
	}
	class UglyBoss extends Supervidor implements Boss
	{
		private $be = 'before';
		private $af= 'after';
		protected $slogan="";
		public function saySloganOutLond ()
    	{
			$a=$this->ValidSlogan();
			if($a===false){
				echo'Chuỗi không hợp lệ';
			}
			else{
				echo "Chuỗi hợp lệ";
			}
		
    	}
    	public function setSlogan($sl)
    	{
			$this->slogan=$sl;
    	}
    	public function ValidSlogan()
    	{
			if(strpos($this->slogan,$this->be)!==false && strpos($this->slogan,$this->af)!==false)
        	{
        		return true;
        	}
        	else
        	{
        		return false;
        	}
    	}
	}
	$a=new EasyBoss();
	$a->setSlogan("Do Not push anything to master branch before reviewed by");
	$a->saySloganOutLond();
	echo "<br>";
	$b=new UglyBoss();
	$b->setSlogan('Do NOT push anything to master branch before reviewed by Only they can do it after check it all');
	$b->saySloganOutLond();
 ?>