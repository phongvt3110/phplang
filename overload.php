<?php
class testOverload{
	public function __construct(){

	}
	public function __call($method_name,$parameter){
		if($method_name == "overload_method"){
			$count = count($parameter);
			switch($count){
				case 1:
					echo "<br>you passed one param :".$parameter[0];
					break;
				case 2:
					echo "<br>you passed two param :".$parameter[0] ."   ".$parameter[1];
					break;
				default:
					echo "<br>hello overload_method";
			}
		}
	}
}
$obj = new testOverload();
$obj->overload_method("one agr");
$obj->overload_method("kaka","hehehehehe");
$obj->overload_method();
?>