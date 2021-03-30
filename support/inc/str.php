<?php

function slug_str($slug)
{
    return ucwords(str_replace('-', ' ', $slug));
}