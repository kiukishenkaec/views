<?php
namespace Kiukishenkaec\Views\Providers;

use Illuminate\Support\ServiceProvider;
use Kiukishenkaec\Views\Console\Commands\RefreshViewsCommand;

class ViewsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //dd(1);
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'views');


        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/views'),
        ]);


        if ($this->app->runningInConsole()) {
            $this->commands([
                RefreshViewsCommand::class,
            ]);
        }
    }
}
