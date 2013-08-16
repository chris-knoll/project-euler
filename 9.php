<?php

for($a=1; $a<500; $a++)
{
	for($b=1; $b<500; $b++)
	{
		$c = sqrt(($a*$a)+($b*$b));
		if(strpos($c, ".") == false)
		{
			echo $a . " & " . $b . " = " . $c . "<br />";
			$sum = $a+$b+$c;
			echo "<b>" . $sum . "</b><br />";
			if($sum == 1000)
			{
				echo "<h1>Success!!</h1>";
				echo "<h2>Answer is " . ($a*$b*$c) . "</h2>";
			}
		}
	}
}