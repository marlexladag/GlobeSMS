<?php

namespace MarlexLadag\GlobeSMS\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MarlexLadag\GlobeSMS\GlobeSMS
 */
class GlobeSMS extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MarlexLadag\GlobeSMS\GlobeSMS::class;
    }
}
