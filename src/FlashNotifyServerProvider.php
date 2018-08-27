<?php

namespace XuTL\Flash;

use Illuminate\Support\ServiceProvider;

/**
 * Class FlashNotifyServerProvider
 *
 * @author Tongle Xu <xutongle@gmail.com>
 */
class FlashNotifyServerProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../views', 'flash');

        $this->publishes([
            __DIR__ . '/../views' => base_path('resources/views/vendor/flash'),
        ], 'views');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('flashNotify', function () {
            return $this->app->make(FlashNotify::class);
        });
    }
}