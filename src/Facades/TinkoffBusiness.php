<?php

namespace Kiriunin\LaravelTinkoffBusinessApi\Facades;

use Illuminate\Support\Facades\Facade;

class TinkoffBusiness extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tinkoff-business';
    }
}
