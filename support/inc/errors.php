<?php

function validate($errors, $input)
{
    return $errors->has($input) ? 'is-invalid' : null;
}
