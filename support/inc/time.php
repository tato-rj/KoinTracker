<?php

function carbon($string, $isMilliseconds = false)
{
	if ($isMilliseconds)
		$string = $string/1000;
	
	return \Carbon\Carbon::parse($string)->timezone(config('app.timezone'));
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

function timeslots($first = null)
{
	$night = [
		"00:00 AM",
		"00:15 AM",
		"00:30 AM",
		"00:45 AM",
		"01:00 AM",
		"01:15 AM",
		"01:30 AM",
		"01:45 AM",
		"02:00 AM",
		"02:15 AM",
		"02:30 AM",
		"02:45 AM",
		"03:00 AM",
		"03:15 AM",
		"03:30 AM",
		"03:45 AM",
		"04:00 AM",
		"04:15 AM",
		"04:30 AM",
		"04:45 AM",
		"05:00 AM",
		"05:15 AM",
		"05:30 AM",
		"05:45 AM"
	];
	
	$morning = [
		"06:00 AM",
		"06:15 AM",
		"06:30 AM",
		"06:45 AM",
		"07:00 AM",
		"07:15 AM",
		"07:30 AM",
		"07:45 AM",
		"08:00 AM",
		"08:15 AM",
		"08:30 AM",
		"08:45 AM",
		"09:00 AM",
		"09:15 AM",
		"09:30 AM",
		"09:45 AM",
		"10:00 AM",
		"10:15 AM",
		"10:30 AM",
		"10:45 AM",
		"11:00 AM",
		"11:15 AM",
		"11:30 AM",
		"11:45 AM"
	];
	
	$afternoon = [
		"12:00 PM",
		"12:15 PM",
		"12:30 PM",
		"12:45 PM",
		"1:00 PM",
		"1:15 PM",
		"1:30 PM",
		"1:45 PM",
		"2:00 PM",
		"2:15 PM",
		"2:30 PM",
		"2:45 PM",
		"3:00 PM",
		"3:15 PM",
		"3:30 PM",
		"3:45 PM",
		"4:00 PM",
		"4:15 PM",
		"4:30 PM",
		"4:45 PM",
		"5:00 PM",
		"5:15 PM",
		"5:30 PM",
		"5:45 PM"
	];

	$evening = [
		"6:00 PM",
		"6:15 PM",
		"6:30 PM",
		"6:45 PM",
		"7:00 PM",
		"7:15 PM",
		"7:30 PM",
		"7:45 PM",
		"8:00 PM",
		"8:15 PM",
		"8:30 PM",
		"8:45 PM",
		"9:00 PM",
		"9:15 PM",
		"9:30 PM",
		"9:45 PM",
		"10:00 PM",
		"10:15 PM",
		"10:30 PM",
		"10:45 PM",
		"11:00 PM",
		"11:15 PM",
		"11:30 PM",
		"11:45 PM"
	];

	return compact(['night', 'morning', 'afternoon', 'evening']);
}