<?php
$num = 600851475143;

//Setup an array of prime numbers
$primes = array();
for($i=2; $i <= 10000; $i++)
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
foreach($primes as $prime)
{
	echo $prime . ", ";
}



$factors = array();
$done = false;
for($i = 0; $i < 5; $i++)
{
	foreach($primes as $prime)
	{
		if(bcmod($num, $prime) == 0)
		{
			$factors[] = $prime;
			$num = ($num / $prime);
			echo "Divided number by " . $prime . "!<br />";
			break;
		}
	}
}

echo "Breaking down this number... we have factors of: ";

foreach($factors as $factor)
{
	echo $factor . ", ";
}

echo ", and a remaining number of " . $num;