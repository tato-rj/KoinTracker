<?php

function slug_str($slug)
{
    return ucwords(str_replace('-', ' ', $slug));
}

function get_words($sentence, $count = 10) {
	preg_match("/(?:\w+(?:\W+|$)){0,$count}/", $sentence, $matches);
	$words = $matches[0];

	$lastchar = substr($words, -1);

	if ($lastchar == ' ' || $lastchar == '.')
		return substr($words, 0, -1) . '...';

	return $words . '...';
}
