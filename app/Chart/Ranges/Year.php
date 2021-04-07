<?php

namespace App\Chart\Ranges;

class Year extends ChartRange
{
	protected $range = '1y';
	protected $length = 55;
	protected $step = 1;
	protected $frequency = 'subWeeks';
}
