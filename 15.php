<?php

$grid = populate_pascal_grid(20, 20);

echo count($grid);


function populate_pascal_grid($width, $height)
{
	$grid = array(array());

	for($x = 0; $x <= $width; $x++)
	{
		$grid[$x][1] = 1;
	}

	for($y = 0; $y <= $height; $y++)
	{
		$grid[1][$y] = 1;
	}

	for($y = 2; $y <= $height; $y++)
	{
		for($x = 2; $x <= $width; $x++)
		{
			$grid[$x][$y] = $grid[$x-1][$y] + $grid[$x][$y-1];
		}
	}

	return $grid;
}

function print_grid($grid)
{
	echo "<table>";
	for($y=0; $y<=20; $y++)
	{
		echo "<tr>";
		for($x=0; $x<=20; $x++)
		{
			echo "<td>" . $grid[$x][$y] . "</td>";
		}
		echo "</tr>";
	}
}


/*
echo trace_path(5, 5);

function trace_path($x, $y)
{
	//Check to see if we are at our goal
	if($x == 20 && $y == 20)
	{
		return 1;
	}
	//Check to see if we have two path options
	elseif($x < 20 && $y < 20)
	{
		return trace_path(($x+1), $y) + trace_path($x, ($y+1));
	}
	//Check to see if we can move right
	elseif($x < 20)
	{
		return trace_path(($x+1), $y);
	}
	//Otherwise we can only move down
	else
	{
		return trace_path($x, ($y+1));
	}
}
*/