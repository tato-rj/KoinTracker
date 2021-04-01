<?php

function array_find($array = null, $keys = [])
{
	if (! $array)
		return null;

	$nest = $array;

	foreach($keys as $key) {
		if (array_key_exists($key, $nest)) {
			$nest = $nest[$key];
		} else {
			return null;
		}
	}

	return $nest;
}
