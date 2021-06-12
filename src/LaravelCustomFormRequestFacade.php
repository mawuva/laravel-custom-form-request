<?php

namespace Mawuekom\LaravelCustomFormRequest;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\LaravelCustomFormRequest\Skeleton\SkeletonClass
 */
class LaravelCustomFormRequestFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-custom-form-request';
    }
}
