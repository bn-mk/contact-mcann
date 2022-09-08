<?php

namespace App\Providers;

use App\Http\Controllers\ContactController;
use App\Interfaces\ContactFormInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /* bind the DatabaseContactForm implementation
         * this allows us to send our forms to various places
         * for example we can integrate with salesforce or other 3rd party forms
         * by creating a SalesForceForm class that extends our interface
        */
        $this->app->bind(ContactFormInterface::class, ContactController::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
