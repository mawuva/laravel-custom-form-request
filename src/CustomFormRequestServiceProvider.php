<?php

namespace Mawuekom\CustomFormRequest;

use Illuminate\Support\ServiceProvider;

class CustomFormRequestServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     * 
     * @return void
     */
    public function boot()
    {
        
    }

    /**
     * Register the application services.
     * 
     * @return void
     */
    public function register()
    {
        $this ->app ->register('Mawuekom\FormRequest\FormRequestServiceProvider');
    }
}
