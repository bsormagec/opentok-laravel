<?php namespace Sormagec\OpentokLaravel;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;
use OpenTok\OpenTok;

class OpentokServiceProvider extends BaseServiceProvider {

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/opentok.php' => config_path('opentok.php'),
        ], 'config');
    }
	
	/**
     * Register the application services.
     */
	public function register(){
        $this->mergeConfigFrom(__DIR__ . '/../config/opentok.php', 'opentok');
        $this->app->singleton('OpentokApi', function ($app) {
            return new OpenTok(
				$app['config']->get('opentok')['api_key'],
				$app['config']->get('opentok')['api_secret']
			);
        });
    }
}