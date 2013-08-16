<?php

$product = 1;
$sum = 0;

for($i = 100; $i > 0; $i--)
{
	$product = bcmul($product, $i);
}

$nums = str_split($product);

foreach($nums as $num)
{
	$sum += $num;
}

echo $sum;