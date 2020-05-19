<?php

namespace Codeat3\LaravelLinemaro;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codeat3\LaravelLinemaro\Skeleton\SkeletonClass
 */
class LaravelLinemaroFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-linemaro';
    }
}
