<?php 
    class Lop {

    	public function checkVali() {
    		$fp = @fopen('2.txt', "r"); 
   	 		$data = fread($fp, filesize('2.txt'));
    		$after = strpos($data,'after');
    		$before = strpos($data,'before');
    		if(!empty($data) && strlen($data)>50 && !$after && isset($before))  {
    			echo 'chuỗi hợp lệ';
    		}
    		else {
    			echo ' chuỗi không hợp lệ';
    			 }

    	}
    }
    $row = new Lop;
    $row->checkVali(); 
    
 ?>