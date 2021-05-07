<?php

function production()
{
	return app()->environment() == 'production';
}

function local()
{
	return app()->environment() == 'local';
}

function testing()
{
	return app()->environment() == 'testing';
}

function liveMarket()
{
	return env('APP_MARKET') == 'live';
}
