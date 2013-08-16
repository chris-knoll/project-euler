<?php

$weekday_array = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
$weekday = 6;
$sundays_on_first = 0;

for($year = 1900; $year <= 2000; $year++)
{
	($year % 4 == 0) ? $is_leap_year = true : $is_leap_year = false;
	($year % 100 == 0) ? $is_century = true : $is_century = false;

	for($month = 1; $month <= 12; $month++)
	{
		if($month == 2)
		{
			if($is_leap_year)
			{
				if($is_century && $year % 400 != 0)
				{
					$days_in_month = 28;
				}
				else
				{
					$days_in_month = 29;
				}
			}
			else
			{
				$days_in_month = 28;
			}
		}
		elseif($month == 9 || $month == 4 || $month == 6 || $month == 11)
		{
			$days_in_month = 30;
		}
		else
		{
			$days_in_month = 31;
		}

		for($day = 1; $day <= $days_in_month; $day++)
		{
			if($weekday == 6)
			{
				$weekday = 0;
			}
			else
			{
				$weekday++;
			}
			echo $year . " " . $month . " " . $day . " " . $weekday_array[$weekday] . "<br />";
			if($day == 1 && $weekday == 6 && $year > 1900)
			{
				$sundays_on_first++;
			}
		}
	}
}

echo "There were " . $sundays_on_first . " Sundays that landed on the 1st of the month starting from 1901 through 2000.";