<?php

namespace App\Markets;

use Illuminate\Support\Facades\Redis;

abstract class Crypto
{
	abstract public function namespace();
	abstract public function update();

	public function __construct()
	{
		$this->prefix = config('database.redis.prefix');
	}

	public function set($key, $value)
	{
		if ($value)
			Redis::hset($this->namespace(), $key, serialize($value));
	}

	public function get($key = null)
	{
		if ($key)
			return unserialize(Redis::hget($this->namespace(), $key));

		return collect(Redis::hgetall($this->namespace()))->unserialized();
	}
}