<?php

$total_letters = 0;

for($i = 1; $i < 1000; $i++)
{
	$words = num_to_words($i);
	$words = str_replace(" ", "", $words);
	$words = str_replace("-", "", $words);
	$total_letters += strlen($words);
}

echo "From 1 to 999 uses a total of " . $total_letters . " letters. <br />";
echo "One thousand has 11 letters.";

function num_to_words($num)
{
	if($num < 20)
	{
		switch($num)
		{
			case 0:
				return;
			case 1:
				return "one";
			case 2:
				return "two";
			case 3:
				return "three";
			case 4:
				return "four";
			case 5:
				return "five";
			case 6:
				return "six";
			case 7:
				return "seven";
			case 8:
				return "eight";
			case 9:
				return "nine";
			case 10:
				return "ten";
			case 11:
				return "eleven";
			case 12:
				return "twelve";
			case 13:
				return "thirteen";
			case 14:
				return "fourteen";
			case 15:
				return "fifteen";
			case 16:
				return "sixteen";
			case 17:
				return "seventeen";
			case 18:
				return "eighteen";
			case 19:
				return "nineteen";
		}
	}
	elseif($num < 100)
	{
		if($num % 10 == 0)
		{
			$has_single_digit = false;
		}
		else
		{
			$has_single_digit = true;
		}

		if($num < 30)
		{
			return ($has_single_digit) ? "twenty-" . num_to_words($num - 20) : "twenty";
		}
		elseif($num < 40)
		{
			return ($has_single_digit) ? "thirty-" . num_to_words($num - 30) : "thirty";
		}
		elseif($num < 50)
		{
			return ($has_single_digit) ? "forty-" . num_to_words($num - 40) : "forty";
		}
		elseif($num < 60)
		{
			return ($has_single_digit) ? "fifty-" . num_to_words($num - 50) : "fifty";
		}
		elseif($num < 70)
		{
			return ($has_single_digit) ? "sixty-" . num_to_words($num - 60) : "sixty";
		}
		elseif($num < 80)
		{
			return ($has_single_digit) ? "seventy-" . num_to_words($num - 70) : "seventy";
		}
		elseif($num < 90)
		{
			return ($has_single_digit) ? "eighty-" . num_to_words($num - 80) : "eighty";
		}
		else
		{
			return ($has_single_digit) ? "ninety-" . num_to_words($num - 90) : "ninety";
		}
	}
	elseif($num < 1000)
	{
		$nums = str_split($num);
		$word_form = num_to_words($nums[0]) . " hundred";
		($num % 100 != 0) ? $word_form .= " and " . num_to_words($num % 100) : $word_form;
		return $word_form;
	}
}