<?php 
	class handleString {
	 	public $check1;
	 	
	 	public function readfile() {
	 		$fp = @fopen('2.txt', "r"); 
   	 		$data = fread($fp, filesize('2.txt'));
   	 		$this->check1=$data;
   	 		
	 	}
	 	public function checkValidString() {

	 		$after = strpos($this->check1,'after');
	 		$before = strpos($this->check1,'before');
	 		if(!empty($this->check1) && strlen($this->check1)>50 && !$after && isset($before))  {
    			echo 'chuỗi hợp lệ';
    		}
    		else {
    			echo ' chuỗi không hợp lệ';
    			 }

	 	}
	}
	$rows = new handleString;
	$rows->readfile();
	$rows->checkValidString();

 ?>