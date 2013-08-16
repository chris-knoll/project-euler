<?php

$result = bcpow(2, 1000);

echo "2^1000 is: " . $result;

//Process this huge string and add it up.
$result_array = str_split($result);

$answer = 0;

foreach($result_array as $num)
{
	$answer += $num;
}

echo "<p>The answer is: " . $answer . "</p>";