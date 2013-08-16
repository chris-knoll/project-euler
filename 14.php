<?php
$longest = 0;
for($i = 999999; $i > 10; $i--)
{
	$links = 1;
	$current = $i;
	while($current != 1)
	{
		if($current % 2 == 0)
		{
			$current = $current / 2;
		}
		else
		{
			$current = 3*$current + 1;
		}
		$links++;
	}
	if($links > $longest)
	{
		$longest = $links;
		echo $i . ": " . $links . " links in the chain<br />";
	}
}