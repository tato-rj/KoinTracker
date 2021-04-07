<?php

namespace App\Chart\Ranges;

class Hour extends ChartRange
{
	protected $range = '1h';
	protected $length = 30;
	protected $step = 2;
	protected $frequency = 'subMinutes';
}
