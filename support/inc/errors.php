<?php

function validate($errors, $input)
{
    return $errors->has($input) ? 'is-invalid' : null;
}

function bugreport($e)
{
	// if (production())
		return \Bugsnag::notifyException($e);
}
