<?php

function percentage($num, $total, $caret = false)
{
	$upcaret = $caret ? '<i class="fas fa-caret-up mr-1"></i>' : null;
	$downcaret = $caret ? '<i class="fas fa-caret-up mr-1"></i>' : null;

	if ($total == 0)
		return $upcaret . '0.0%';

	$percent = (int)round(($num * 100) / $total);

	return $percent > 0 ? 
			$upcaret . $percent . '%' : 
			$downcaret . $percent . '%';
}

function diffInPercent($start, $end)
{	
	if ($start == 0)
		return '0%';
	
	$formatter = new \NumberFormatter('en_US', NumberFormatter::PERCENT);
	
	return $formatter->format(($end - $start) / $start);
}

function formatPercent($number, $caret = true)
{
	$upcaret = $caret ? '<i class="fas fa-caret-up mr-1"></i>' : null;
	$downcaret = $caret ? '<i class="fas fa-caret-down mr-1"></i>' : null;

	return $number > 0 ? 
			$upcaret . number_format($number, 2) . '%' : 
			$downcaret . number_format($number, 2) . '%';
}

function large_num($n) {
    // first strip any formatting;
    $n = (0+str_replace(",", "", $n));

    // is this a number?
    if (!is_numeric($n)) return false;

    // now filter it;
    if ($n > 1000000000000) return round(($n/1000000000000), 2).' T';
    elseif ($n > 1000000000) return round(($n/1000000000), 2).' B';
    elseif ($n > 1000000) return round(($n/1000000), 2).' M';

    return number_format($n);
}