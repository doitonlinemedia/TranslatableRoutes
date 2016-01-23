<?php namespace Doitonlinemedia\Translatableroutes;

use Illuminate\Support\Facades\Facade;

class TranslatableRoute extends Facade
{
    protected static function getFacadeAccessor() { return 'Doitonlinemedia\Translatableroutes\TranslatableRouteService'; }
}