<?php

$sum = 0;
for($i=3; $i < 2000000; $i+=2)
{
	$is_prime = true;
	for($j = 2; $j <= sqrt($i); $j++)
	{
		if($i % $j == 0)
		{
			$is_prime = false;
			break;
		}
	}
	if($is_prime)
	{
		$sum += $i;
	}
}

echo $sum + 2;