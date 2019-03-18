<?php 
	class HandleString
	{
		public $check1;
		public $check2;
		public function checkValidString($S){
			$pos = strpos($S,"after");
			$be = strpos($S,"before");
			if (empty($S)){
				return true;
			}
			else if(strlen($S)>50 && $pos===false){
				return true;
			}
			else if($be===true){
				return true;
			}
			else {
				return false;
			}
		}
		public function readFile($file)
		{
			# code...
			$fp = @fopen($file, "r");
			  
			// Kiểm tra file mở thành công không
			if (!$fp) {
			    echo  'Đọc file không thành công';
			}
			else{
				$a=$this->checkValidString($file);
				if($a===false){
					echo'Chuỗi không hợp lệ';
				}
				else{
					echo "Chuỗi hợp lệ";
				}
			}
		}
	}
	$check1=new HandleString();
		echo'Chuỗi S1 là ';
   		$result=$check1->readFile('file1.txt');
   	echo '<br>';
	$check2=new HandleString();
		echo'Chuỗi S2 là ';
   		$result=$check2->readFile('file2.txt');
 ?>