<?php namespace Doitonlinemedia\Translatableroutes;

use Illuminate\Support\Facades\Facade;

class TranslatableRouteFacade extends Facade
{
    protected static function getFacadeAccessor() { return 'Doitonlinemedia\Translatableroutes\TranslatableRoute'; }
}