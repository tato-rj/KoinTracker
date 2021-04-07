<?php

namespace App\Chart\Ranges;

class Month extends ChartRange
{
	protected $range = '30d';
	protected $length = 30;
	protected $step = 24;
	protected $frequency = 'subHours';
}
