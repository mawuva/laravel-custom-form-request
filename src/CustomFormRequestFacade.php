<?php

namespace Mawuekom\CustomFormRequest;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mawuekom\CustomFormRequest\Skeleton\SkeletonClass
 */
class CustomFormRequestFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'custom-form-request';
    }
}
