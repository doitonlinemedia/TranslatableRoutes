<?php namespace Doitonlinemedia\Translatableroutes;

use Illuminate\Support\ServiceProvider;

class TranslatableRoutesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/resources/lang' => resource_path('lang/vendor/translatableroutes'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('TranslatableRouteFacade', function(){
            return new TranslatableRoute;
        });

        $this->app->make('Doitonlinemedia\Translatableroutes\TranslatableRouteFacade');

    }
}
