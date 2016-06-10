<?php
class testParent{
    public function f1(){
        echo 1;
    }
    public function f2(){
        echo 2;
    }
}
class testChild extends testParent{
    function f2($a) //Overriding function f2
    {
        echo $a;
    }
}
 
$a = new testChild();
$a->f2("Hello You.<br>");//It will print Hello You
?>