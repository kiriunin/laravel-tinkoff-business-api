<?php

namespace Kiriunin\LaravelTinkoffBusinessApi\Exceptions;

use Exception;
use Throwable;

class InvalidConfiguration extends Exception
{
    public static function configurationNotSet(): InvalidConfiguration
    {
        return new static('In order to use Tinkoff Business API you need to add token in the `token` key of `config.tinkoff-business`.');
    }
}
