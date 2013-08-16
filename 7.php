<?php

$primes = array();
for($i=2; $i <= 200000; $i++)
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
		$primes[] = $i;
	}
}

foreach($primes as $key=>$prime)
{
	echo "#" . ($key+1) . ": " . $prime . "<br />";
}