<?php
echo "<h1>Location of this file is :".__FILE__."</h1><br>";
function demo(){
	define('COLOR','RED');
	echo COLOR;
	for($i=0;$i<=20;$i++){
		if($i%2 == 0)echo "<br><font color = 'red'>".$i."</font>";
		else echo "<br><font color ='blue'>".$i."</font>";
	}
}
function cuuchuong(){
	echo "<table border = '1' width = '1200'>";
	for($i = 10;$i >=1;$i--){
		echo "<tr>";
		for($j = 1;$j<=$i;$j++){
			echo "<td>$i x $j=".($i*$j)."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}

function fibonaci(){
	$x=0;
	$y=1;
	for($i=0;$i<=100000;$i++){
		$z=$x+$y;
		if($z<100000)echo $z."<br>";
		$x=$y;
		$y=$z;
	}
}
function arprint($array_print){
	foreach ($array_print as $key => $value) {
	echo "<br>".$key."-----".$value;
	}
}
function arprint1($array_print){
	foreach ($array_print as $item) {
		echo "<br>".$item;
	}
}
echo "<br>php_smtp.dll la thu vien phuc vu cho viec gui mail trong php";
$strmd5 = "magento2";
echo "<br>".md5($strmd5);
echo "<br>sha1:".sha1($strmd5);
$string = "<h1>Hello</h1>";
echo "<br>".htmlentities($string);
$ar = array('name' => "Phong",'phone'=>"0983397580",'email'=>"vtphong651043@gmail.com" );
echo "<br>";
print_r($ar);
echo "<br>";
var_dump($ar);
echo "<br>". $ar['name'];
$ar[]= "mau den";
$ar[]= "0983397580";
$ar[]="con meo";
echo "<br>";
var_dump($ar);
echo "<br>".$ar[0];
echo "<br>".$ar[1];
echo "<br>".$ar[2];
unset($ar[1]);
echo "<br>".var_dump($ar);
foreach ($ar as $key => $value) {
	echo "<br>".$key."-----".$value;
	//if($key == 'name')echo "<br>your name is ".$value;
}
echo "<br>".count($ar);
$arr = array_values($ar);
foreach ($arr as $key => $value) {
	echo "<br>".$key."--------------".$value;
}
$arr1 = array_keys($ar);
foreach ($arr1 as $key => $value) {
	echo "<br>".$key."--------------".$value;
}
echo "<br>".array_pop($ar);
$arnum = array_push($ar, "FPT company","planday company");
echo "<br>".$arnum."<br>";
arprint($ar);
echo "<br>array_pop($arrayvar) loai bo phan tu cuoi va tra ve phan tu bi loai bo";
echo "<br>array_shift(array) loai bo phan tu dau tien va tra ve phan tu bi loai bo";
echo "<br>";
arprint1($ar);
$x=5;$y=12;
echo "<br>";
var_export($x != $y);
echo "<br>".date("w");
class clsA{
	public function __construct(){
		echo "<br>Hello from __construct()";
	}
}
$objcls = new clsA();


class A//multiple constructors in PHP
{
    function __construct()
    {
        $a = func_get_args();
        $i = func_num_args();
        if (method_exists($this,$f='__construct'.$i)) {
            call_user_func_array(array($this,$f),$a);
        }
    }
   
    function __construct1($a1)
    {
        echo('<br>__construct with 1 param called: '.$a1.PHP_EOL);
    }
   
    function __construct2($a1,$a2)
    {
        echo('<br>__construct with 2 params called: '.$a1.','.$a2.PHP_EOL);
    }
   
    function __construct3($a1,$a2,$a3)
    {
        echo('<br>__construct with 3 params called: '.$a1.','.$a2.','.$a3.PHP_EOL);
    }
}
$o = new A('sheep');
$o = new A('sheep','cat');
$o = new A('sheep','cat','dog'); 

goto a;

echo "<br>foo";
a:
echo "<br />bar";
const Connect = '<br/>ok';
echo Connect;
?>
