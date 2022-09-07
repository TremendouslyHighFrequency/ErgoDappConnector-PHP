<?php
namespace Terahertz\ErgoDappConnector;
use Terahertz\ErgoDappConnector\ErgoDappConnector;
use Illuminate\Support\ServiceProvider;

class DappServiceProvider extends ServiceProvider
{

    public function register()
    {
      // Register a class in the service container
      $this->app->bind('ErgoDappConnector', function ($app) {
        return new ErgoDappConnector();
      });
      $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'ergo-dapp-connector');

    }


    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        if ($this->app->runningInConsole()) {
          $this->publishes([
            __DIR__.'/../config/config.php' => config_path('ergo-dapp-connector.php'),
          ], 'config');
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'ergo-dapp-connector');

    }
}