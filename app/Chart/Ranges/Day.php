<?php

namespace App\Chart\Ranges;

class Day extends ChartRange
{
	protected $range = '24h';
	protected $length = 48;
	protected $step = 30;
	protected $frequency = 'subMinutes';
}
