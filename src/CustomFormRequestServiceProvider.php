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
        // Register the main class to use with the facade
        $this ->app ->singleton('custom-form-request', function () {
            return new CustomFormRequest;
        });

        $this ->app ->register('Mawuekom\FormRequest\FormRequestServiceProvider');
    }
}
