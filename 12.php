<?php

$last = 0;

for($i = 1; $i <=15000; $i++)
{
	$current = $last + $i;
	echo "Number: " . $current;

	$current_divisors = 0;
	$last_divisor = $current;
	for($j = 1; $j <= $last_divisor; $j++)
	{
		if($current % $j == 0)
		{
			$current_divisors += 2;
			$last_divisor = $current / $j;
		}
	}
	echo ", Divisors: " . $current_divisors . "<br />";
	if($current_divisors >= 500)
	{
		echo "<h1>We did it!!</h1>";
	}
	$last = $current;
}