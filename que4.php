<?php
function printPairs($arr, $n, $sum)
{
$count = 0; 
echo "Pairs of sum=$sum are:  ";
	for ($i = 0; $i < $n; $i++)
		for ( $j = $i + 1; $j < $n; $j++)
			if ($arr[$i] + $arr[$j] == $sum)
				echo "(", $arr[$i], ", ", $arr[$j], ")";
}

$arr = array (4,4,-1,7,1,-2);
$n = sizeof($arr);
$sum = 8;
printPairs($arr, $n, $sum);

?>
