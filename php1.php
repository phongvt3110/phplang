<?php
define(COLOR,"red");
echo COLOR."<br>";
echo 5/7;
$today = 5;
echo "<br>";
echo $today == 5 ? "Hom nay la thu nam" : "Hom nay khong phai la thu nam";
// for($i = 0;$i<=100;$i++){
//     if($i%2 ===0){
//         echo '<br><font color = "red">' .$i . '</font>';
//     }else{
//         echo "<br><font color = 'blue'>".$i."</font>";
//     }
// }
echo "<table width = '900' border = '1'>";
    for($i = 1;$i <= 10; $i++){
        echo "<tr>";
        for($j = 2;$j <=10; $j++){
            echo "<td> $j x $i  =".$j*$i."</td>";
        }
        echo "</tr>";
    }
echo "</table>";
echo "<br>";
$x = 0;
$y = 1;
for($i = 0 ; $i <= 10000; $i++){
    $z = $x +$y;
    if($z <= 10000){
        echo "<br>".$z;
    }
    $x = $y;
    $y = $z;
}
?>