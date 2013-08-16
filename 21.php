<?php

$divisor_sums = array(0);

$answer = 0;

for($i = 1; $i <= 10000; $i++)
{
	//Calculate divisor sums if we don't have it already
	if(!isset($divisor_sums[$i]))
	{
		$divisor_sums[$i] = get_divisor_sum($i);
	}

	if(!isset($divisor_sums[$divisor_sums[$i]]))
	{
		$divisor_sums[$divisor_sums[$i]] = get_divisor_sum($divisor_sums[$i]);
	}

	if($i == $divisor_sums[$divisor_sums[$i]] && $i != $divisor_sums[$i])
	{
		$is_amicable = true;
		$answer += $i;
		echo "<b>The following is amicable: </b>";
	}
	echo $i . " has a divisor sum of " . $divisor_sums[$i] . "<br />";
}

echo "The answer is: " . $answer;

function get_divisor_sum($num)
{
	$sum = 1;
	if($num % 2 == 0)
	{
		$sum += ($num / 2) + 2;
		$inc = 1;
	}
	else 
	{
		$inc = 2;
	}

	for($j = 3; $j <= sqrt($num); $j += $inc)
	{
		if($num % $j == 0)
		{
			$sum += ($num / $j) + $j;
		}
	}

	return $sum;
}