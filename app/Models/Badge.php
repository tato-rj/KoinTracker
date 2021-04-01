<?php

namespace App\Models;

class Badge extends AppModel
{
	protected $theme = 'grey';

	public function getTheme()
	{
		if (auth()->check() && auth()->user()->hasBadge($this))
			$this->theme = $this->color;

		return 'alert-' . $this->theme;
	}
}
