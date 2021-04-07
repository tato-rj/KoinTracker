<?php

namespace App\Chart\Ranges;

class Week extends ChartRange
{
	protected $range = '7d';
	protected $length = 21;
	protected $step = 8;
	protected $frequency = 'subHours';
}
