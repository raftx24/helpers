<?php

namespace LaravelEnso\Helpers\App\Exceptions;

use LogicException;

class InCents extends LogicException
{
    public static function dirty()
    {
        return new static(__('Must set cent mode before filling cent attributes'));
    }
}
