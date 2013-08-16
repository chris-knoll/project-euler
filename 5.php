<?php

$done = false;

for($i = 12252240; ! $done; $i+=20)
{
	for($j = 19; $j >= 2; $j--)
	{
		if($i % $j != 0)
		{
			break;
		}

		if($j == 2)
		{
			echo "Answer is: " . $i;
			$done = true;
		}
	}
}