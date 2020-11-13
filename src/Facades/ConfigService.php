<?php
namespace Payjs\Payjs\Facades;

use Illuminate\Support\Facades\Facade;

class ConfigService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Payjs\Payjs\Services\PayjsConfigService::class;
    }
}
