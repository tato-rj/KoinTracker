<?php

function slug_str($slug)
{
    return ucwords(str_replace('-', ' ', $slug));
}

function get_sentences($sentence, $count = 10) {
	$trimmed = preg_replace( "/\r|\n/", "", $sentence);
	$array = preg_split('/\. |\? |! /', $trimmed);
	$sentences = array_slice($array, 0, $count);

	return join('. ', $sentences) . '.';
}
