<?php

even_fib(1, 2, 2);

function even_fib($int1, $int2, $total)
{
	$current = $int1 + $int2;
	if($current > 4000000)
	{
		break;
	}

	if($current % 2 == 0)
	{
		$total += $current;
	}

	echo "<p>For " . $current . " our total so far is: " . $total;
	return even_fib($int2, $current, $total);
}