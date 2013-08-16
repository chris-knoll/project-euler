<?php

$sum_of_squares = 0;
$sum = 0;

for($i = 1; $i <= 100; $i++)
{
	$sum += $i;
	$sum_of_squares += ($i * $i);
}

$answer = ($sum * $sum) - $sum_of_squares;

echo "<p>The answer is: " . $answer . "</p>";