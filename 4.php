<?php

for($i = 999; $i > 900; $i--)
{
	for($j = 999; $j > 900; $j--)
	{
		$product = ($i * $j);
		echo $product . "<br />";
		//Check if it's a palindrome
		if(substr($product, 0, 1) === substr($product, -1, 1) &&
			substr($product, 1, 1) === substr($product, -2, 1) &&
			substr($product, 2, 1) === substr($product, -3, 1))
		{
			echo "<h1>Palindrome detected!</h1>";
		}
	}
}