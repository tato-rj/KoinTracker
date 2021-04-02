<?php

function carbon($string)
{
	return \Carbon\Carbon::parse($string)->setTimezone(config('app.timezone'));
}

function minutes($count)
{
	return 60 * $count;
}

function hours($count)
{
	return minutes(60) * $count;
}

function days($count)
{
	return hours(24) * $count;
}

function weeks($count)
{
	return days(7) * $count;
}

function timeslots($starttime, $endtime, $duration, $first = null)
{
	 
	$timesCollection = collect([]);
	$timeslots = collect(['night' => collect([]), 'morning' => collect([]), 'afternoon' => collect([]), 'evening' => collect([])]);
	$startTime = strtotime($starttime);
	$endTime = strtotime($endtime);
	 
	$add_mins  = $duration * 60;
	 
	while ($startTime <= $endTime)
	{
	   $timesCollection->push(date("H:i A", $startTime));
	   $startTime += $add_mins;
	}

	$timesCollection = $timesCollection->unique();

	$timesCollection->each(function($time, $key) use ($timeslots) {
		$int = intval($time);

		if ($int < 6) {
			$timeslots['night']->push($time);
		} elseif ($int < 12) {
			$timeslots['morning']->push($time);			
		} elseif ($int < 18) {
			$timeslots['afternoon']->push($time);			
		} elseif ($int < 24) {
			$timeslots['evening']->push($time);			
		}
	});

	return $timeslots;
}