<?php

namespace App\Models;

class Badge extends AppModel
{
	protected $theme = 'none';

	public function getTheme()
	{
		if (auth()->check() && auth()->user()->hasBadge($this))
			$this->theme = $this->level;

		return 'badge-' . $this->theme;
	}

	public function getPolicyAttribute()
	{
		return lcfirst(\Str::of($this->icon)->studly());
	}
}
